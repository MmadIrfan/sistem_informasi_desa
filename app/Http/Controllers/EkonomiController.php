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
        $ekonomis = Ekonomi::latest()->paginate(1);
        return view('home.gambaranumum.ekonomi.indexekonomi', compact('ekonomis'));
    }

    public function dataekonomi()
    {
        $ekonomis = Ekonomi::all();
        return redirect()->route('ekonomi')->with('ekonomi', $ekonomis);
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
    public function edit($id)
    {
        $ekonomis = Ekonomi::find($id);
        return view('home.gambaranumum.ekonomi.editekonomi', compact('ekonomis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekonomi $ekonomi, $id)
    {
        $this->validate($request, [
            'isi'     => 'required'
        ]);
            $ekonomis = Ekonomi::find($id);
            $ekonomis->update([
                'isi'   => $request->isi
            ]);

        //redirect to index
        if($ekonomis){
            //redirect dengan pesan sukses
            return redirect()->route('updateekonomi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateekonomi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekonomi $ekonomi)
    {
        //
    }
}
