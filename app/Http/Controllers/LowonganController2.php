<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lowongan;
use App\User;
use Auth;
use Carbon\Carbon;


class LowonganController extends Controller
{
    public function index()
    {
      $status = "";
      $profil = User::find(Auth::user()->id);
      if ($profil->tempat_lahir == "" || $profil->tgl_lahir == "" || $profil->jenis_kelamin == "" || $profil->alamat == "" || $profil->agama == "" ||  $profil->foto == "") {
          return redirect('/profile')->with('error', 'Mohon Lengkapi Profil Anda Terlebih Dahulu');
      }else{
          $status = "clear";
      }
      $today = Carbon::today()->formatLocalized('%A, %d %B %Y');
      $now = Carbon::now()->format('Y-m-d H:i:00');
      $lowongan = Lowongan::select('*')
      ->where('tanggal_selesai','>=',$now)
      ->get();

    	return view('pages.user.lowongan',compact('status','lowongan'));
    }

    public function regis($id)
    {
      $lowongan = Lowongan::find($id);
      return view('pages.user.form.accept',compact('lowongan'));
    }

    public function indexAdmin()
    {
      $lowongan = Lowongan::all();
      return vieww('pages.admin.listlowongan',compact('lowongan'));
    }

    public function test()
    {
      return view('pages.user.form.test');
    }

    public function show($id)
    {
      $lowongan = Lowongan::find($id);
      return view('pages.admin.Lowongan.detail');
    }

    public function create()
    {
      return view('pages.admin.Lowongan.create');
    }
}
