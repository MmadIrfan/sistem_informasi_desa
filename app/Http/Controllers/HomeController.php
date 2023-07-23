<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kepaladesa;
use App\Models\Sejarah;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sejarahs = Sejarah::all();
        $kepaladesas = Kepaladesa::all();
        return view('welcome',['sejarahs' => $sejarahs],['kepaladesas' => $kepaladesas]);
    }

    public function visimisi()
    {
        $visimisis = Visimisi::all();
        return view('pages.desa.visimisi', ['visimisis' => $visimisis]);
    }

    public function sejarah()
    {
        $sejarahs = Sejarah::all();
        return view('pages.desa.sejarah', ['sejarahs' => $sejarahs]);
    }

    public function kepaladesa()
    {
        $kepaladesas = Kepaladesa::all();
        return view('pages.desa.kepaladesa', ['kepaladesas' => $kepaladesas]);
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
