<?php

namespace App\Http\Controllers;

use App\Models\Prestasipkk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasipkkController extends Controller
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
        return view('home.lembaga.pkk.createprestasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prestasi'     => 'required|image|mimes:png,jpg,jpeg|max:5048',
            'judulprestasi'      => 'required',
        ]);
    
        //upload image
        $prestasi = $request->file('prestasi');
        $prestasi->storeAs('public/prestasipkk', $prestasi->hashName());
    
        $prestasipkk = Prestasipkk::create([
            'prestasi'           => $prestasi->hashName(),
            'judulprestasi'      => $request->judulprestasi
        ]);
    
        if($prestasipkk){
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
    public function show(Prestasipkk $prestasipkk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasipkk $prestasipkk, $id)
    {
        $prestasipkk = Prestasipkk::find($id);
        return view('home.lembaga.pkk.editprestasi', compact('prestasipkk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasipkk $prestasipkk, $id)
    {
        $this->validate($request, [
            'prestasi'     => 'image|mimes:png,jpg,jpeg|max:5048',
            'judulprestasi'      => 'required',
        ]);

        $prestasipkk = Prestasipkk::find($id);

        //check if image is uploaded
        if ($request->hasFile('prestasi')) {

            //upload new image
            $prestasi = $request->file('prestasi');
            $prestasi->storeAs('public/prestasipkk', $prestasi->hashName());

            //delete old image
            Storage::delete('public/prestasipkk/'.$prestasipkk->prestasi);

            //update prestasipkk with new image
            $prestasipkk->update([
                'prestasi'           => $prestasi->hashName(),
                'judulprestasi'      => $request->judulprestasi
            ]);

        } else {

            //update post without image
            $prestasipkk->update([
                'judulprestasi'      => $request->judulprestasi
            ]);
        }

        //redirect to index
        if($prestasipkk){
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
    public function destroy(Prestasipkk $prestasipkk)
    {
        //
    }
}
