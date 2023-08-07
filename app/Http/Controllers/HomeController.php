<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Demografis;
use App\Models\Ekonomi;
use App\Models\Geografis;
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
        $pengumumen = Pengumuman::orderBy('created_at', 'desc')->get();
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
        $geografis = Geografis::all();
        return view('pages.gambaranumum.geografis',['geografis' => $geografis] );
    }

    public function demografis()
    {
        $demografis = Demografis::all();
        return view('pages.gambaranumum.demografis', ['demografis' => $demografis]);
    }

    public function kondisiekonomi()
    {
        $ekonomis = Ekonomi::all();
        return view('pages.gambaranumum.kondisiekonomi', ['ekonomis' => $ekonomis]);
    }

    public function pengumuman()
    {
        $pengumumen = Pengumuman::all();
        $pengumumen = Pengumuman::orderBy('created_at', 'desc')->get();
        return view('pages.pengumuman.pengumuman', ['pengumumen' =>$pengumumen]);
    }

    public function anggota()
    {
        $anggotas = Anggota::all();
        return view('pages.pemerintahandesa.anggota', ['anggotas' => $anggotas]);
    }

    
}
