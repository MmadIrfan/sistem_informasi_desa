<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Kepaladesa;
use App\Models\Pengumuman;
use App\Models\Sejarah;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sejarahs = Sejarah::all();
        $pengumumen = Pengumuman::all();
        $kepaladesas = Kepaladesa::all();
        $anggotas = Anggota::all();
        return view('welcome',[
            'sejarahs' => $sejarahs,
            'pengumumen' =>$pengumumen,
            'kepaladesas' => $kepaladesas,
            'anggotas' => $anggotas,
        ]);
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

    public function pengumuman()
    {
        $pengumumen = Pengumuman::all();
        return view('pages.pengumuman.pengumuman', ['pengumumen' =>$pengumumen]);
    }

    public function anggota()
    {
       $anggotas = Anggota::all();
        return view('pages.pemerintahandesa.anggota', ['anggotas' => $anggotas]);
    }

    
}
