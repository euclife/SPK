<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Bobot;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\LowonganSyarat;
use App\Models\Lowongan;
use App\Models\Nilai;
use App\Models\Pelamar;
use Carbon\Carbon;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lowongan::latest()->get();
        if (request()->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('waktu', function ($data) {
                    return '<td>' . Carbon::parse($data->tanggal_selesai)->formatLocalized('%d %B %Y') . '</td>';
                })
                ->addColumn('syarat', function ($data) {
                    return '<td class="mx-auto text-center"><button type="button" class="btn btn-info btn-lg btn-lowongan" data-id="' . $data->id_lowongan . '" data-posisi="' . $data->posisi . '">Syarat</button></td>';
                })
                ->addColumn('action', function ($data) {
                    return '
                          <a href="' . url("admin/lowongan", $data->id_lowongan) . '" class="btn bg-teal-400"><i class="fa fa-eye"></i> Detail</a>
                          <a href="' . url("admin/lowongan/edit", $data->id_lowongan) . '" class="btn btn-primary"><i class="fa fa-pencil"></i> Perbarui</a>
                          <button class="btn btn-danger btn-hapus" data-remove="' . url('admin/lowongan/hapus/' . $data->id_lowongan) . '"> <i class="fa fa-trash"></i>Hapus</button>
                            ';
                })
                ->rawColumns(['action', 'waktu', 'syarat'])
                ->make(true);
        }
        return view('admin.lowongan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lowongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'posisi'     => 'required|string',
            'keterangan'      => 'string|nullable',
            'tanggal_selesai'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $lowongan = new Lowongan();
        $lowongan->posisi = $request->posisi;
        $lowongan->keterangan = $request->keterangan;
        $lowongan->tanggal_selesai = $request->tanggal_selesai;
        $lowongan->save();

        foreach ($request->syarat as $key => $value) {
            $syarat = new LowonganSyarat();
            $syarat->id_lowongan = $lowongan->id_lowongan;
            $syarat->nama_syarat = $value;
            $syarat->save();
        }

        return redirect('admin/lowongan')->with('success', 'Data Lowongan baru berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lowongan = Lowongan::find($id);
        $pelamar = Pelamar::with(['nilai', 'user'])
            ->where('lowongan_id', $id)
            ->where('kondisi', 'active')
            ->get();
        $hasil = $pelamar->sortBy(['nilai.nilai','ASC']);
        $bobot = Bobot::all();
        return view('admin/lowongan/detail', compact('lowongan', 'pelamar', 'bobot', 'hasil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lowongan = Lowongan::find($id)->first();
        $syarat = LowonganSyarat::select('*')->where('id_lowongan', $id)->get();

        return view('admin.lowongan.edit', compact('lowongan', 'syarat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'posisi'     => 'required|string',
            'keterangan'      => 'string|nullable',
            'tanggal_selesai'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        LowonganSyarat::select('*')->where('id_lowongan', $id)->delete();
        $lowongan = Lowongan::find($id);
        $lowongan->posisi = $request->posisi;
        $lowongan->keterangan = $request->keterangan;
        $lowongan->tanggal_selesai = $request->tanggal_selesai;
        $lowongan->save();

        LowonganSyarat::select('*')->where('id_lowongan', $id)->delete();
        foreach ($request->syarat as $key => $value) {
            $syarat = new LowonganSyarat();
            $syarat->id_lowongan = $lowongan->id_lowongan;
            $syarat->nama_syarat = $value;
            $syarat->save();
        }
        return redirect('admin/lowongan/edit/' . $lowongan->id_lowongan)->with('success', 'Data Lowongan berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lowongan = Lowongan::find($id);
        Lowongan::destroy($id);
        LowonganSyarat::select('*')->where('id_lowongan', $id)->delete();
        return response()->json("success");
    }

    public function regis($id)
    {
        $lowongan = Lowongan::find($id);
        return view('user.form.accept', compact('lowongan'));
    }

    public function compile($id)
    {
        $pelamar = Pelamar::where('lowongan_id', $id)->where('kondisi', 'active')->get();

        //set C1,C2,C3,C4,C5
        foreach ($pelamar as $key => $value) {
            // Cek Jika sudah pernah save
            $penilaian = Nilai::where('id_pelamar', $value->id)->first();
            if ($penilaian === null) {
                $penilaian = new Nilai();
                $penilaian->id_pelamar = $value->id;
                $penilaian->id_lowongan = $id;
            }


            // Cek Umur (C1)
            if (($value->umur >= 20) && ($value->umur <= 22)) {
                $penilaian->c1 = 0.5;
            } else if (($value->umur >= 23) && ($value->umur <= 25)) {
                $penilaian->c1 = 0.3;
            } else {
                $penilaian->c1 = 0;
            }

            // Cek IPK (C2)
            if ($value->ipk > 3.00) {
                $penilaian->c2 = 0.5;
            } else if ($value->ipk < 3.00) {
                $penilaian->c2 = 0.3;
            } else {
                $penilaian->c2 = 0;
            }

            // Cek Nilai (C3)
            if ($value->umum == null) {
                $penilaian->c3 = 0;
            } else {
                $penilaian->c3 = $value->umum;
            }

            // Cek CV (C4)
            if ($value->cv != "") {
                $penilaian->c4 = 0.5;
            } else {
                $penilaian->c4 = 0;
            }

            // Cek Ijasah (C5)
            if ($value->ijasah != "") {
                $penilaian->c5 = 0.5;
            } else {
                $penilaian->c5 = 0;
            }
            // Save Dtabase
            $penilaian->save();
        }

        // Saatnya perhitungan Hasil
        $maxC1 = Nilai::where('id_lowongan', $id)->max('c1');
        $maxC2 = Nilai::where('id_lowongan', $id)->max('c2');
        $maxC3 = Nilai::where('id_lowongan', $id)->max('c3');
        $maxC4 = Nilai::where('id_lowongan', $id)->max('c4');
        $maxC5 = Nilai::where('id_lowongan', $id)->max('c5');

        $bobot = Bobot::all();
        foreach ($pelamar as $key => $value) {
            $penilaian = Nilai::where('id_pelamar', $value->id)->first();

            $penilaian->hasil_c1 = $penilaian->c1 / $maxC1;
            $penilaian->hasil_c2 = $penilaian->c2 / $maxC2;
            if ($penilaian->c3 == 0 || $maxC3 == 0) {
                $penilaian->hasil_c3 = 0;
            } else {
                $penilaian->hasil_c3 = $penilaian->c3 / $maxC3;
            }
            $penilaian->hasil_c4 = $penilaian->c4 / $maxC4;
            $penilaian->hasil_c5 = $penilaian->c5 / $maxC5;

            // Perhitungan Nilai Akhir
            $nilai = 0;
            foreach ($bobot as $index => $data) {
                switch ($data->kriteria) {
                    case 'C1':
                        $nilai += $penilaian->hasil_c1 * $data->bobot;
                        break;

                    case 'C2':
                        $nilai += $penilaian->hasil_c2 * $data->bobot;
                        break;

                    case 'C3':
                        $nilai += $penilaian->hasil_c3 * $data->bobot;
                        break;

                    case 'C4':
                        $nilai += $penilaian->hasil_c4 * $data->bobot;
                        break;

                    case 'C5':
                        $nilai += $penilaian->hasil_c5 * $data->bobot;
                        break;
                }
            }
            $penilaian->nilai = $nilai;

            $penilaian->save();
        }

        return redirect('admin/lowongan/'.$id);
    }
}
