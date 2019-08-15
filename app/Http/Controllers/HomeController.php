<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Auth;
use App\User;
use App\Lowongan;
use App\Syarat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $level = Auth::user()->level;
        if($level == "ADMIN"){
            return redirect('admin');
        }else{
            $today = Carbon::today()->formatLocalized('%A, %d %B %Y');
            $now = Carbon::now()->format('Y-m-d H:i:00');

            $profil = User::find(Auth::user()->id);
            $status = "";

            if ($profil->tempat_lahir == "" || $profil->tgl_lahir == "" || $profil->jenis_kelamin == "" || $profil->alamat == ""  || $profil->agama == "" || $profil->foto == ""  || $profil->no_telp == "") {
                $status = "not clear";
            }else{
                $status = "clear";
            }

            $lowongan = Lowongan::select('*')
            ->where('tanggal_selesai','>=',$now)
            ->get();
            return view('pages.user.dashboard', compact('lowongan','today','now','status'));
        }
    }

    public function profilEditVerifikasi(){
        $user = User::find(Auth::user()->id);
        $id = $user->id;
        $dir = 'upload/user/img/profile/';
        $foto = "images/profile.jpg";
        if ($user->foto !="") {
           $foto = $dir.$user->foto;
        }
        return view('pages/user/form/profilEditVerifikasi',compact('user','foto','id'));
    }

    public function profilEditVerifikasiPost(Request $request){
            //  $validator = Validator::make($request->all(), [
            // 'klasifikasi'           => 'required|string',
            // 'no_registrasi'         => 'required|string|unique:koleksi_identitas,no_registrasi',
            // 'no_inventaris2'        => 'required|string|unique:koleksi_identitas,no_inventaris',
            // 'tgl_registrasi'  => 'required|string',
            // 'tgl_inventaris'   => 'required|string',
            // ]);
            //  if ($validator->fails()) {
            // return redirect()->back()
            // ->withErrors($validator)
            // ->withInput();
            //     }
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->tempat_lahir = $request->tempat_lahir;
            $user->tgl_lahir = $request->tanggal_lahir;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('home');

    }

}
