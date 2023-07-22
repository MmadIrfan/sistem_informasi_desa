<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function visimisi()
    {
        return view('pages.desa.visimisi');
    }

    public function sejarah()
    {
        return view('pages.desa.sejarah');
    }

    public function kepaladesa()
    {
        return view('pages.desa.kepaladesa');
    }

    public function geografis()
    {
        return view('pages.gambaranumum.geografis');
    }

    public function demografis()
    {
        return view('pages.gambaranumum.demografis');
    }

    public function kondisiekonomi()
    {
        return view('pages.gambaranumum.kondisiekonomi');
    }

    public function beritadesa()
    {
        return view('pages.berita.beritadesa');
    }

    public function anggota()
    {
        $anggotas = Anggota::latest();
        return view('pages.pemerintahandesa.anggota', compact('anggotas'));
    }
}
