<?php

namespace App\Http\Controllers;

use App\Models\Demografis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demografiss = Demografis::latest();
        return view('home.gambaranumum.demografis.indexdemografis', compact('demografiss'));
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
    public function show(Demografis $demografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demografis $demografis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demografis $demografis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demografis $demografis)
    {
        //
    }
}
