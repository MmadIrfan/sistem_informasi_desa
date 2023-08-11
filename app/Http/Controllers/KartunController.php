<?php

namespace App\Http\Controllers;

use App\Models\Kartun;
use App\Http\Controllers\Controller;
use App\Models\Kegiatankartun;
use App\Models\Prestasikartun;
use Illuminate\Http\Request;

class KartunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kartuns = kartun::latest()->paginate(10);
        $kegiatankartuns = Kegiatankartun::latest()->paginate(10);
        $prestasikartuns = Prestasikartun::latest()->paginate(10);
        return view('home.lembaga.kartun.indexkartun', compact('kartuns', 'kegiatankartuns', 'prestasikartuns'));
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
    public function show(Kartun $kartun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kartun $kartun, $id)
    {
        $kartun = Kartun::find($id);
        return view('home.lembaga.kartun.editinformasi', compact('kartun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kartun $kartun, $id)
    {
        $this->validate($request, [
            'informasi'      => 'required'
        ]);

        $kartun = Kartun::find($id);
        $kartun->update([
            'informasi'      => $request->informasi
        ]);
        //redirect to index
        if($kartun){
            //redirect dengan pesan sukses
            return redirect()->route('updatekartun.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatekartun.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kartun $kartun)
    {
        //
    }
}
