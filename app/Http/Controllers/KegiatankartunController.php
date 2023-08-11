<?php

namespace App\Http\Controllers;

use App\Models\Kegiatankartun;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatankartunController extends Controller
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
        return view('home.lembaga.kartun.createkegiatan');
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
        $kegiatan->storeAs('public/kegiatankartun', $kegiatan->hashName());
    
        $kegiatankartun = Kegiatankartun::create([
            'kegiatan'           => $kegiatan->hashName(),
            'judulkegiatan'      => $request->judulkegiatan,
        ]);
    
        if($kegiatankartun){
            //redirect dengan pesan sukses
            return redirect()->route('updatekartun.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatekartun.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatankartun $kegiatankartun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatankartun $kegiatankartun, $id)
    {
        $kegiatankartun = Kegiatankartun::find($id);
        return view('home.lembaga.kartun.editkegiatan', compact('kegiatankartun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatankartun $kegiatankartun, $id)
    {
        $this->validate($request, [
            'kegiatan'     => 'image|mimes:png,jpg,jpeg|max:5048',
            'judulkegiatan'      => 'required',
        ]);

        $kegiatankartun = Kegiatankartun::find($id);

        //check if image is uploaded
        if ($request->hasFile('kegiatan')) {

            //upload new image
            $kegiatan = $request->file('kegiatan');
            $kegiatan->storeAs('public/kegiatankartun', $kegiatan->hashName());

            //delete old image
            Storage::delete('public/kegiatankartun/'.$kegiatankartun->kegiatan);

            //update kegiatankartun with new image
            $kegiatankartun->update([
                'kegiatan'           => $kegiatan->hashName(),
                'judulkegiatan'      => $request->judulkegiatan
            ]);

        } else {

            //update post without image
            $kegiatankartun->update([
                'judulkegiatan'      => $request->judulkegiatan
            ]);
        }

        //redirect to index
        if($kegiatankartun){
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
    public function destroy(Kegiatankartun $kegiatankartun, $id)
    {
        $kegiatankartun = Kegiatankartun::find($id);

        Storage::delete('public/kegiatankartun/'.$kegiatankartun->kegiatan);

        $kegiatankartun->delete();

        return redirect()->route('updatekartun.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
