<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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
        return view('pages.user.form.profil',compact('user','foto'));
   }

   public function profilFoto(Request $request){

        $user = User::find(Auth::user()->id);
        $user->foto = null;
            // Cek Jika ada gambar maka move
            if ($request->hasFile('foto')) 
            {
                if ($user->foto != '' && File::exists($dir . $user->foto)) File::delete($dir . $user->foto);
                $foto = $request->file('foto');
                $name = str_slug("user_".$user->id."".date("YmdHis")).'.'.$foto->getClientOriginalExtension();
                $destinationPath = public_path('upload/user/img/profile/');
                $foto->move($destinationPath, $name);
                $user->foto = $name;
            }
        $user->save();

        dd($request->all());
        return response()->json([
            'message' => 'Image saved Successfully'
        ], 200);
      }

      public function profilUpdate(Request $request){
         $validator = Validator::make($request->all(), [   
            'name'     => 'required|string',
            'tempat_lahir'      => 'required|string',
            'tgl_lahir'  => 'required',
            'jenis_kelamin'  => 'required',
            'alamat'  => 'required',
            'agama'  => 'required',
            'no_telp'  => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->agama = $request->agama;
        $user->no_telp = $request->no_telp;
        $user->save();
        return redirect('/profile')->with('success', 'Profil Anda Berhasil di Perbaharui');;
      }

}
