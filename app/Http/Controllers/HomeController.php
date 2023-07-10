<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function visimisi()
    {
        return view('pages.visimisi');
    }

    public function sejarah()
    {
        return view('pages.sejarah');
    }
}
