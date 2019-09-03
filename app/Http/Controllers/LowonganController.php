<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\LowonganSyarat;
use App\Models\Lowongan;
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
                          return'<td>'.Carbon::parse($data->tanggal_selesai)->formatLocalized('%d %B %Y').'</td>';
                      })
                      ->addColumn('syarat', function ($data) {
                          return '<td class="mx-auto text-center"><button type="button" class="btn btn-info btn-lg btn-lowongan" data-id="'.$data->id_lowongan.'" data-posisi="'.$data->posisi.'">Syarat</button></td>';
                      })
                      ->addColumn('action', function ($data) {
                          return'
                          <a href="'.url("admin/lowongan", $data->id_lowongan).'" class="btn bg-teal-400"><i class="fa fa-eye"></i> Detail</a>
                          <a href="'.url("admin/lowongan/edit", $data->id_lowongan).'" class="btn btn-primary"><i class="fa fa-pencil"></i> Perbarui</a>
                          <button class="btn btn-danger btn-hapus" data-remove="'.url('admin/lowongan/hapus/'.$data->id_lowongan).'"> <i class="fa fa-trash"></i>Hapus</button>
                            ';
                      })
                      ->rawColumns(['action','waktu','syarat'])
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
        $pelamar_tahap1 = Pelamar::select('users.*', 'surat_lamaran', 'cv', 'ijasah', 'umur','status', 'ipk', 'point')
                                    ->join('users', 'users.id', '=', 'pelamar.user_id')
                                    ->where('lowongan_id', $id)
                                    ->where('status', 1)
                                    ->get();
        $pelamar_tahap2 = Pelamar::select('users.*', 'surat_lamaran', 'cv', 'ijasah', 'status', 'ipk','psikotes','umum' ,'point')
                                    ->join('users', 'users.id', '=', 'pelamar.user_id')
                                    ->where('lowongan_id', $id)
                                    ->where('status', 2)
                                    ->get();
        $pelamar_tahap3 = Pelamar::select('users.*', 'surat_lamaran', 'cv', 'ijasah', 'status', 'ipk', 'point')
                                    ->join('users', 'users.id', '=', 'pelamar.user_id')
                                    ->where('lowongan_id', $id)
                                    ->where('status', 3)
                                    ->get();
        $pelamar = Pelamar::select('id')
                            ->where('lowongan_id', $id)
                            ->get();

        return view('admin/lowongan/detail', compact('lowongan', 'pelamar', 'pelamar_tahap1', 'pelamar_tahap2', 'pelamar_tahap3'));
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
        return redirect('admin/lowongan/edit/'.$lowongan->id_lowongan)->with('success', 'Data Lowongan berhasil di perbarui');
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
}
