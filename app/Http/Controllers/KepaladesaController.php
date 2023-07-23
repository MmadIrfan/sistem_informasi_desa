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
        $kepaladesas = Kepaladesa::latest()->paginate(1);
        return view('home.desa.kepaladesa.indexkepaladesa', compact('kepaladesas'));
    }

    public function datakepaladesa()
    {
        $kepaladesas = Kepaladesa::all();
        return redirect()->route('kepaladesa', '')->with('kepaladesa', $kepaladesas);
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
    public function edit($id)
    {
        $kepaladesa = Kepaladesa::find($id);
        return view('home.desa.kepaladesa.editkepaladesa', compact('kepaladesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kepaladesa $kepaladesa, $id)
    {
        $this->validate($request, [
            'sambutan'     => 'required'
        ]);
            $kepaladesa = Kepaladesa::find($id);
            $kepaladesa->update([
                'sambutan'   => $request->sambutan
            ]);

        //redirect to index
        if($kepaladesa){
            //redirect dengan pesan sukses
            return redirect()->route('updatekepaladesa.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatekepaladesa.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepaladesa $kepaladesa)
    {
        //
    }
}
