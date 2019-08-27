<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use App\Models\Pelamar;
use App\User;
use Auth;
use Carbon\Carbon;

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
      }else{
          $status = "clear";
      }

      $lowongan = Lowongan::select('*')
      ->where('tanggal_selesai','>=',$now)
      ->get();
      return view('user.dashboard', compact('lowongan','today','now','status'));
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
        //
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
        return view('admin.pelamar.show',compact('pelamar'));
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
        //
    }
}
