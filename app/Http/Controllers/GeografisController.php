<?php

namespace App\Http\Controllers;

use App\Models\Geografis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $geografiss = Geografis::latest();
        return view('home.gambaranumum.geografis.indexgeografis', compact('geografiss'));
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
    public function show(Geografis $geografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Geografis $geografis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Geografis $geografis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Geografis $geografis)
    {
        //
    }
}
