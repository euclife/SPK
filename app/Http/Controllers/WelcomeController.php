<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Auth;

use App\Lowongan;

class WelcomeController extends Controller
{
	public function index(){
		if (Auth::guest()) {

			$today = Carbon::today()->formatLocalized('%A, %d %B %Y');
			$now = Carbon::now()->format('Y-m-d H:i:00');

			$lowongan = Lowongan::select('*')
			->where('tanggal_selesai','>=',$now)
			->get();
			return view('pages.welcome', compact('lowongan'));
		}else{
			return redirect()->route('home');
		}
	}
}
