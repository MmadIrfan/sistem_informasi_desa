<?php

namespace App\Http\Controllers;

use App\Models\Prestasikartun;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasikartunController extends Controller
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
        return view('home.lembaga.kartun.createprestasi');
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
        $prestasi->storeAs('public/prestasikartun', $prestasi->hashName());
    
        $prestasikartun = Prestasikartun::create([
            'prestasi'           => $prestasi->hashName(),
            'judulprestasi'      => $request->judulprestasi
        ]);
    
        if($prestasikartun){
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
    public function show(Prestasikartun $prestasikartun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasikartun $prestasikartun, $id)
    {
        $prestasikartun = Prestasikartun::find($id);
        return view('home.lembaga.kartun.editprestasi', compact('prestasikartun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasikartun $prestasikartun, $id)
    {
        $this->validate($request, [
            'prestasi'     => 'image|mimes:png,jpg,jpeg|max:5048',
            'judulprestasi'      => 'required',
        ]);

        $prestasikartun = Prestasikartun::find($id);

        //check if image is uploaded
        if ($request->hasFile('prestasi')) {

            //upload new image
            $prestasi = $request->file('prestasi');
            $prestasi->storeAs('public/prestasikartun', $prestasi->hashName());

            //delete old image
            Storage::delete('public/prestasikartun/'.$prestasikartun->prestasi);

            //update prestasikartun with new image
            $prestasikartun->update([
                'prestasi'           => $prestasi->hashName(),
                'judulprestasi'      => $request->judulprestasi
            ]);

        } else {

            //update post without image
            $prestasikartun->update([
                'judulprestasi'      => $request->judulprestasi
            ]);
        }

        //redirect to index
        if($prestasikartun){
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
    public function destroy(Prestasikartun $prestasikartun, $id)
    {
        $prestasikartun = Prestasikartun::find($id);

        Storage::delete('public/prestasikartun/'.$prestasikartun->prestasi);

        $prestasikartun->delete();

        return redirect()->route('updatekartun.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
