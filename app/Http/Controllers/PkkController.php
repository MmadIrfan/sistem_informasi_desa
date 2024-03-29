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
    public function edit(Pkk $pkk, $id)
    {
        $pkk = Pkk::find($id);
        return view('home.lembaga.pkk.editinformasi', compact('pkk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pkk $pkk, $id)
    {
        $this->validate($request, [
            'informasi'      => 'required'
        ]);

        $pkk = Pkk::find($id);
        $pkk->update([
            'informasi'      => $request->informasi
        ]);
        //redirect to index
        if($pkk){
            //redirect dengan pesan sukses
            return redirect()->route('updatepkk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatepkk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pkk $pkk)
    {
        //
    }
}
