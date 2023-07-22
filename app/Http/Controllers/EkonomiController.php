<?php

namespace App\Http\Controllers;

use App\Models\Ekonomi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EkonomiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekonomiss = Ekonomi::latest();
        return view('home.gambaranumum.ekonomi.indexekonomi', compact('ekonomiss'));
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
    public function show(Ekonomi $ekonomi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekonomi $ekonomi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekonomi $ekonomi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekonomi $ekonomi)
    {
        //
    }
}
