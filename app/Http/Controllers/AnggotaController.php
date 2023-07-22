<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::latest()->paginate(10);
        return view('home.pemerintahandesa.indexanggota', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.pemerintahandesa.createanggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'jabatan'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/anggota', $image->hashName());
    
        $anggota = Anggota::create([
            'image'     => $image->hashName(),
            'nama'     => $request->nama,
            'jabatan'   => $request->jabatan
        ]);
    
        if($anggota){
            //redirect dengan pesan sukses
            return redirect()->route('updateanggota.index')->with(['Berhasil' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateanggota.index')->with(['Gagal' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
