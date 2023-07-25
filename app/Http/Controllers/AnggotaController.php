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
            'image'     => 'required|image|mimes:png,jpg,jpeg|max:2048',
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
            return redirect()->route('updateanggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateanggota.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit($id)
    {
        //Ambil anggota berdasarkan id
        $anggota = Anggota::find($id);
        return view('home.pemerintahandesa.editanggota', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota, $id)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama'     => 'required',
            'jabatan'   => 'required'
        ]);

        $anggota = Anggota::find($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/anggota', $image->hashName());

            //delete old image
            Storage::delete('public/anggota/'.$anggota->image);

            //update anggota with new image
            $anggota->update([
                'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'jabatan'   => $request->jabatan
            ]);

        } else {

            //update post without image
            $anggota->update([
                'nama'     => $request->nama,
                'jabatan'   => $request->jabatan
            ]);
        }

        //redirect to index
        if($anggota){
            //redirect dengan pesan sukses
            return redirect()->route('updateanggota.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updateanggota.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota, $id)
    {
        $anggota = Anggota::find($id);

        Storage::delete('public/anggota/'.$anggota->image);

        $anggota->delete();

        return redirect()->route('updateanggota.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
