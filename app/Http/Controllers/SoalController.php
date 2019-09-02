<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use App\Models\Soal;

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
                ->rawColumns(['action'])
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
        //
    }
}
