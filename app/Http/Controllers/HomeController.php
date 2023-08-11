<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Demografis;
use App\Models\Ekonomi;
use App\Models\Galeri;
use App\Models\Geografis;
use App\Models\Kartun;
use App\Models\Kegiatankartun;
use App\Models\Kegiatanpkk;
use App\Models\Kepaladesa;
use App\Models\Pengumuman;
use App\Models\Pkk;
use App\Models\Prestasikartun;
use App\Models\Prestasipkk;
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
        $galeris = Galeri::orderBy('created_at', 'desc')->get();
        return view('welcome',[
            'sejarahs' => $sejarahs,
            'pengumumen' =>$pengumumen,
            'kepaladesas' => $kepaladesas,
            'anggotas' => $anggotas,
            'galeris' => $galeris
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

    public function pkk()
    {
        $pkks = Pkk::all();
        $kegiatanpkks = Kegiatanpkk::all();
        $prestasipkks = Prestasipkk::all();
        return view('pages.lembaga.pkk', ['pkks' => $pkks, 'kegiatanpkks' => $kegiatanpkks, 'prestasipkks' => $prestasipkks]);
    }

    public function kartun()
    {
        $kartuns = Kartun::all();
        $kegiatankartuns = Kegiatankartun::all();
        $prestasikartuns = Prestasikartun::all();
        return view('pages.lembaga.kartun', ['kartuns' => $kartuns, 'kegiatankartuns' => $kegiatankartuns, 'prestasikartuns' => $prestasikartuns]);
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

    public function galeri()
    {
        $galeris = Galeri::all();
        $galeris= Galeri::orderBy('created_at', 'desc')->get();
        return view('pages.galeri.galeri', ['galeris' => $galeris]);
    }

}
