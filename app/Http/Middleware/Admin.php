<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $level = Auth::user()->level;
        if ($level != "ADMIN") {
             return redirect()->back()->with(['error' => 'Anda Tidak Berhak Mengakses Halaman Tersebut!']);;
         }
        return $next($request);
    }
}
