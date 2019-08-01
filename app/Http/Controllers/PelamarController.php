<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class PelamarController extends Controller
{
   public function profil(){
   		$user = User::find(Auth::user()->id);
        $id = $user->id;
        $dir = 'upload/user/img/profile/';
        $foto = "images/profile.jpg";
        if ($user->foto !="") {
           $foto = $dir.$user->foto;
        }
        return view('pages.user.form.profil',compact('user'));
   }
}
