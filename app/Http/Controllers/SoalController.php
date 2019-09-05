<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\Jawab;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\Models\Soal;
use Auth;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Soal::all();
        if (request()->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '
                          <a href="' . url("admin/soal/edit", $data->id_soal) . '" class="btn btn-primary"><i class="fa fa-pencil"></i> Perbarui</a>
                          <button class="btn btn-danger btn-hapus" data-remove="' . url('admin/soal/hapus/' . $data->id_soal) . '"> <i class="fa fa-trash"></i>Hapus</button>
                            ';
                })
                ->rawColumns(['action','pertanyaan'])
                ->make(true);
        }
        return view('admin.soal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soal.create');
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
            'pertanyaan'     => 'required|string',
            'a'      => 'required',
            'b'      => 'required',
            'c'      => 'required',
            'd'      => 'required',
            'score'      => 'required|numeric|min:0',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $Soal = new Soal();
        $Soal->pertanyaan = $request->pertanyaan;
        $Soal->pila = $request->a;
        $Soal->pilb = $request->b;
        $Soal->pilc = $request->c;
        $Soal->pild = $request->d;
        $Soal->kunci = $request->kunci;
        $Soal->score = $request->score;

        $Soal->save();
        return redirect('admin/soal')->with('success', 'Soal Berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal = Soal::find($id);
        return view('user.form.get_soal', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $soal = Soal::find($id);
        return view('admin.soal.edit',compact('soal'));
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
            'pertanyaan'     => 'required|string',
            'a'      => 'required',
            'b'      => 'required',
            'c'      => 'required',
            'd'      => 'required',
            'score'      => 'required|numeric|min:0',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $Soal = Soal::find($id);
        $Soal->pertanyaan = $request->pertanyaan;
        $Soal->pila = $request->a;
        $Soal->pilb = $request->b;
        $Soal->pilc = $request->c;
        $Soal->pild = $request->d;
        $Soal->kunci = $request->kunci;
        $Soal->score = $request->score;

        $Soal->save();
        return redirect('admin/soal')->with('success', 'Soal Berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::find($id);
        Soal::destroy($id);
        return response()->json("success");
    }

    public function jawab(Request $request)
    {
        $get_jawab = explode('/', $request->get_jawab);
        $pilihan = $get_jawab[0];
        $id_detail_soal = $get_jawab[1];
        $pelamar = Pelamar::select('*')
            ->where('user_id', Auth::user()->id)
            ->where('kondisi', "active")
            ->first();
        $detail_soal = Soal::find($id_detail_soal);

        $jawab = Jawab::where('id_soal', $id_detail_soal)->where('id_pelamar', Auth::user()->id)->first();
        if (!$jawab) {
            $jawab = new Jawab;
            $jawab->revisi = 0;
        } else {
            $jawab->revisi = $jawab->revisi + 1;
        }

        $jawab->id_lowongan = $pelamar->lowongan_id;
        $jawab->id_soal = $detail_soal->id_soal;
        $jawab->id_pelamar = $pelamar->id;
        $jawab->pilihan = $pilihan;

        $check_jawaban = Soal::where('id_soal', $id_detail_soal)->where('kunci', $pilihan)->first();
        if ($check_jawaban) {
            $jawab->score = $detail_soal->score;
        } else {
            $jawab->score = 0;
        }
        $jawab->status = 0;
        $jawab->save();
        return 1;
    }

    public function kirim()
    {
        $pelamar = Pelamar::select('*')->where('user_id',Auth::user()->id)->where('kondisi','active')->first();
        $soal = Jawab::where('id_pelamar', $pelamar->id )->sum('score');
        
        if ($soal > 90) {
            $pelamar->point = $pelamar->point + 3;
        }else if ($soal > 70) {
            $pelamar->point = $pelamar->point + 2;
        }elseif ($soal >50) {
            $pelamar->point = $pelamar->point + 1;
        } else{
            $pelamar->point = $pelamar->point + 0;
        }

        if ($pelamar->point >= 7) {
            $pelamar->status = 3;
            $pelamar->kondisi = "active";
        }else{
            $pelamar->status = 3;
            $pelamar->kondisi = "not active";
        }
        
        $pelamar->umum = $soal;
        $pelamar->save();
        return  response()->json('success', 200);
    }
    public function done()
    {
        return redirect('dashboard')->with('success', 'Hasil Test Anda berhasil di simpan');;
    }
    
}
