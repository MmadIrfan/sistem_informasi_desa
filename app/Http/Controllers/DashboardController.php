<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home.index');
    }

    public function sejarah()
    {
        return view('home.createsejarah');
    }
    
}
