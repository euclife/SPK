<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use App\Models\Pelamar;
use App\User;
use App\Models\Soal;
use Auth;
use Carbon\Carbon;
use Validator;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today()->formatLocalized('%A, %d %B %Y');
        $now = Carbon::now()->format('Y-m-d H:i:00');

        $profil = User::find(Auth::user()->id);
        $status = "";

        if ($profil->tempat_lahir == "" || $profil->tgl_lahir == "" || $profil->jenis_kelamin == "" || $profil->alamat == ""  || $profil->agama == "" || $profil->foto == ""  || $profil->no_telp == "") {
            $status = "not clear";
        } else {
            $status = "clear";
        }

        $pelamar = Pelamar::select('*')
            ->where('user_id', $profil->id)
            ->where('kondisi', "active")
            ->first();
        if ($pelamar != null) {
            $lowongan = Lowongan::select('*')
                ->where('id_lowongan', $pelamar->lowongan_id)
                ->first();
            $status = "lamar";
        }else{
            $lowongan = Lowongan::select('*')
            ->where('tanggal_selesai', '>=', $now)
            ->get();
        }
        $soals = Soal::all();
        return view('user.dashboard', compact('lowongan', 'today', 'now', 'status','pelamar','soals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'surat_lamaran'     => 'required|mimes:pdf|max:10000',
            'cv'      => 'required|mimes:pdf|max:10000',
            'ijasah'  => 'required|mimes:pdf|max:10000',
            'ipk'  => 'required|regex:/[0-9]+(\.[0-9][0-9]?)?/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)    
                ->withInput();
        }
        $pelamar = new Pelamar();
        $pelamar->user_id = Auth::user()->id;
        $pelamar->lowongan_id = $request->id;
        $pelamar->ipk = $request->ipk;

            $surat_lamaran = $request->file('surat_lamaran');
            $name = str_slug("user_" . $pelamar->user_id . "" . date("YmdHis")) . '.' . $surat_lamaran->getClientOriginalExtension();
            $destinationPath = public_path('upload/user/lamaran/');
            $surat_lamaran->move($destinationPath, $name);
            $pelamar->surat_lamaran = $name;

        $cv = $request->file('cv');
        $name = str_slug("user_" . $pelamar->user_id . "" . date("YmdHis")) . '.' . $cv->getClientOriginalExtension();
        $destinationPath = public_path('upload/user/cv/');
        $cv->move($destinationPath, $name);
        $pelamar->cv = $name;

        $ijasah = $request->file('ijasah');
        $name = str_slug("user_" . $pelamar->user_id . "" . date("YmdHis")) . '.' . $ijasah->getClientOriginalExtension();
        $destinationPath = public_path('upload/user/ijasah/');
        $ijasah->move($destinationPath, $name);
        $pelamar->ijasah = $name;

        $pelamar->kondisi = "active";

        $dateOfBirth = Auth::user()->tgl_lahir;
        $umur = Carbon::parse($dateOfBirth)->age;
        $pelamar->umur = $umur;

        if ($request->ipk > 3) {
            $pelamar->point = 3;
        }else if($request->ipk>2){
            $pelamar->point = 2;
        }else{
            $pelamar->point = 1;
        }

        if ($umur < 24) {
            $pelamar->point += 4;
        }elseif ($umur < 30) {
            $pelamar->point += 3;
        }else if($umur < 40){
            $pelamar->point += 2;
        }else{
            $pelamar->point += 1;
        }

        $pelamar->status = 2;

        $pelamar->save();
        return redirect('/dashboard')->with('success', 'Profil Anda Berhasil di Perbaharui');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelamar = Pelamar::find($id);
        $user = User::find($pelamar->user_id);
        $dir = 'upload/user/img/profile/';
        $foto = "images/profile.jpg";
        if ($user->foto != "") {
            $foto = $dir . $user->foto;
        }
        return view('admin.pelamar.show', compact('pelamar', 'user', 'foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function mundur()
    {
        $user = Pelamar::where('user_id',Auth::user()->id)->where('kondisi','active')->first();
        $user->kondisi = "not active";
        $user->save();
        return redirect()->back();
    }
}
