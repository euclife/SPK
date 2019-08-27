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
        if ($level == "ADMIN") {
            return redirect('admin');
        } else {
            return redirect('dashboard');
        }
    }

    public function profilEditVerifikasi()
    {
        $user = User::find(Auth::user()->id);
        $id = $user->id;
        $dir = 'upload/user/img/profile/';
        $foto = "images/profile.jpg";
        if ($user->foto !="") {
            $foto = $dir.$user->foto;
        }
        return view('pages/user/form/profilEditVerifikasi', compact('user', 'foto', 'id'));
    }
    public function profilEditVerifikasiPost(Request $request)
    {
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
