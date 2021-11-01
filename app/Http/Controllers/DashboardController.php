<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getFeed ()
    {
        if (!Auth::check()) {   //STUGUMA USER@ LOGIN EXACA TE CHE
            return redirect()->route('login')->with('error','gna login exi');
        }
        return view('feed');
    }
}
