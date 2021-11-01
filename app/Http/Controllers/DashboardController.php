<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getFeed ()
    {
        dd(Auth::User()->products);
        return view('feed');
    }
}
