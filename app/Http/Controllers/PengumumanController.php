<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumumen = Pengumuman::latest()->paginate(10);
        return view('home.pengumuman.indexpengumuman', compact('pengumumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.pengumuman.createpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori'  => 'required',
            'judul'     => 'required',
            'image'     => 'required|image|mimes:png,jpg,jpeg|max:5048',
            'tema'      => 'required',
            'konteks'   => 'required',
            'penulis'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/pengumuman', $image->hashName());
    
        $pengumuman = Pengumuman::create([
            'kategori'  => $request->kategori,
            'judul'     => $request->judul,
            'image'     => $image->hashName(),
            'tema'      => $request->tema,
            'konteks'   => $request->konteks,
            'penulis'   => $request->penulis
        ]);
    
        if($pengumuman){
            //redirect dengan pesan sukses
            return redirect()->route('updatepengumuman.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatepengumuman.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pages.pengumuman.detailpengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman, $id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('home.pengumuman.editpengumuman', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman, $id)
    {
        $this->validate($request, [
            'kategori'  => 'required',
            'judul'     => 'required',
            'image'     => 'image|mimes:png,jpg,jpeg|max:5048',
            'tema'      => 'required',
            'konteks'   => 'required',
            'penulis'   => 'required'
        ]);

        $pengumuman = Pengumuman::find($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/pengumuman', $image->hashName());

            //delete old image
            Storage::delete('public/pengumuman/'.$pengumuman->image);

            //update pengumuman with new image
            $pengumuman->update([
                'kategori'  => $request->kategori,
                'judul'     => $request->judul,
                'image'     => $image->hashName(),
                'tema'      => $request->tema,
                'konteks'   => $request->konteks,
                'penulis'   => $request->penulis
            ]);

        } else {

            //update post without image
            $pengumuman->update([
                'kategori'  => $request->kategori,
                'judul'     => $request->judul,
                'tema'      => $request->tema,
                'konteks'   => $request->konteks,
                'penulis'   => $request->penulis
            ]);
        }

        //redirect to index
        if($pengumuman){
            //redirect dengan pesan sukses
            return redirect()->route('updatepengumuman.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatepengumuman.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman, $id)
    {
        $pengumuman = Pengumuman::find($id);

        Storage::delete('public/pengumuman/'.$pengumuman->image);

        $pengumuman->delete();

        return redirect()->route('updatepengumuman.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
