<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\LowonganSyarat;


class apiController extends Controller
{
    public function syaratLowongan($id){
    	$data = LowonganSyarat::select('*')->where('id_lowongan','=',$id)->get();

    	return response()->json($data);
    }
}
