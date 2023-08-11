<?php

namespace App\Http\Controllers;

use App\Models\Pkk;
use App\Http\Controllers\Controller;
use App\Models\Kegiatanpkk;
use App\Models\Prestasipkk;
use Illuminate\Http\Request;

class PkkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkks = Pkk::latest()->paginate(10);
        $kegiatanpkks = Kegiatanpkk::latest()->paginate(10);
        $prestasipkks = Prestasipkk::latest()->paginate(10);
        return view('home.lembaga.pkk.indexpkk', compact('pkks', 'kegiatanpkks', 'prestasipkks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pkk $pkk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pkk $pkk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pkk $pkk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pkk $pkk)
    {
        //
    }
}
