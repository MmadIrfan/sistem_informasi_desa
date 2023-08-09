<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::latest()->paginate(10);
        return view('home.galeri.indexgaleri', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.galeri.creategaleri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto'     => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'judul'      => 'required',
            'kategori'   => 'required'
        ]);
    
        //upload foto
        $foto = $request->file('foto');
        $foto->storeAs('public/galeri', $foto->hashName());
    
        $galeri = Galeri::create([
            'foto'     => $foto->hashName(),
            'judul'      => $request->judul,
            'kategori'   => $request->kategori
        ]);
    
        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('updategaleri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updategaleri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri, $id)
    {
        $galeri = Galeri::find($id);
        return view('home.galeri.editgaleri', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri, $id)
    {
        $this->validate($request, [
            'foto'     => 'image|mimes:jpeg,png,jpg|max:2048',
            'judul'     => 'required',
            'kategori'   => 'required'
        ]);

        $galeri = Galeri::find($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new foto
            $foto = $request->file('foto');
            $foto->storeAs('public/galeri', $foto->hashName());

            //delete old foto
            Storage::delete('public/galeri/'.$galeri->foto);

            //update galeri with new foto
            $galeri->update([
                'foto'      => $foto->hashName(),
                'judul'     => $request->judul,
                'kategori'  => $request->kategori
            ]);

        } else {

            //update post without foto
            $galeri->update([
                'judul'     => $request->judul,
                'kategori'   => $request->kategori
            ]);
        }

        //redirect to index
        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('updategaleri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updategaleri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri, $id)
    {
        $galeri = Galeri::find($id);

        Storage::delete('public/galeri/'.$galeri->foto);

        $galeri->delete();

        return redirect()->route('updategaleri.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
