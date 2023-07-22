<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return view('home.indexadmin');
    }
}
