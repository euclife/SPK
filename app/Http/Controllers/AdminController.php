<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Lowongan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d H:i:00');
        $lowongan = Lowongan::join('pelamar', 'pelamar.lowongan_id', 'lowongan.id_lowongan')
            ->select([
                'lowongan.*',
                DB::raw('(SELECT COUNT(*) FROM pelamar WHERE pelamar.lowongan_id = lowongan.id_lowongan) as total')
            ])
            ->where('tanggal_selesai', '>=', $now)
            ->groupBy('lowongan.id_lowongan')
            ->get();
        $lowonganAll = Lowongan::count();
        $userAll = User::count();
        return view("admin.index", compact('lowongan','lowonganAll','userAll'));
    }
}
