<?php

namespace App\Http\Controllers;

use App\Models\Kegiatanpkk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanpkkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.lembaga.pkk.createkegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kegiatan'     => 'required|image|mimes:png,jpg,jpeg|max:5048',
            'judulkegiatan'      => 'required',
        ]);
    
        //upload image
        $kegiatan = $request->file('kegiatan');
        $kegiatan->storeAs('public/kegiatanpkk', $kegiatan->hashName());
    
        $kegiatanpkk = Kegiatanpkk::create([
            'kegiatan'           => $kegiatan->hashName(),
            'judulkegiatan'      => $request->judulkegiatan,
        ]);
    
        if($kegiatanpkk){
            //redirect dengan pesan sukses
            return redirect()->route('updatepkk.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatepkk.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatanpkk $kegiatanpkk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatanpkk $kegiatanpkk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatanpkk $kegiatanpkk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatanpkk $kegiatanpkk)
    {
        //
    }
}
