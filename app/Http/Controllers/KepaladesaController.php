<?php

namespace App\Http\Controllers;

use App\Models\Kepaladesa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepaladesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kepaladesas = Kepaladesa::latest();
        return view('home.desa.kepaladesa.indexkepaladesa', compact('kepaladesas'));
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
    public function show(Kepaladesa $kepaladesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kepaladesa $kepaladesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kepaladesa $kepaladesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepaladesa $kepaladesa)
    {
        //
    }
}
