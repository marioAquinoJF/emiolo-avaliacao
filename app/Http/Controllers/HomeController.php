<?php

namespace Emiolo\Http\Controllers;

use Emiolo\Http\Requests;
use Illuminate\Http\Request;
use Socialite;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }
    public function comochegar()
    {
        return view('comochegar');
    }
}
