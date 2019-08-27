<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Auth;

use App\Models\Lowongan;

class WelcomeController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            $today = Carbon::today()->formatLocalized('%A, %d %B %Y');
            $now = Carbon::now()->format('Y-m-d H:i:00');

            $lowongan = Lowongan::select('*')
            ->where('tanggal_selesai', '>=', $now)
            ->get();
            return view('welcome', compact('lowongan'));
        } else {
            if (Auth::user()->level == "ADMIN") {
								return redirect()->route('admin');
            }
            return redirect()->route('home');
        }
    }
}
