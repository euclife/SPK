<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class WelcomeController extends Controller
{
    public function index(){
    	if (Auth::guest()) {
			return view('pages.welcome');
		}else{
		   return redirect()->route('home');
		}
    }
}
