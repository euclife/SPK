<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function profil()
    {
        $user = User::find(Auth::user()->id);
        $id = $user->id;
        $dir = 'upload/user/img/profile/';
        $foto = "images/profile.jpg";
        if ($user->foto != "") {
            $foto = $dir . $user->foto;
        }
        return view('user.form.profil', compact('user', 'foto'));
    }

    public function profilFoto(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->foto = null;
        // Cek Jika ada gambar maka move
        if ($request->hasFile('foto')) {
            if ($user->foto != '' && File::exists($dir . $user->foto)) File::delete($dir . $user->foto);
            $foto = $request->file('foto');
            $name = str_slug("user_" . $user->id . "" . date("YmdHis")) . '.' . $foto->getClientOriginalExtension();
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

    public function profilUpdate(Request $request)
    {
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
