<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getFeed ()
    {

        return view('feed', [
            'product' => Auth::user()->products
        ]);
    }
}
