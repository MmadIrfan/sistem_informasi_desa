<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisis = Visimisi::latest()->paginate(1);
        return view('home.desa.visimisi.indexvisimisi', compact('visimisis'));
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
    public function show(Visimisi $visimisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visimisi = Visimisi::find($id);
        return view('home.desa.visimisi.editvisimisi', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visimisi $visimisi, $id)
    {
        $this->validate($request, [
            'visi'     => 'required',
            'misi'   => 'required'
        ]);
            $visimisi = Visimisi::find($id);
            $visimisi->update([
                'visi'     => $request->visi,
                'misi'   => $request->misi
            ]);

        //redirect to index
        if($visimisi){
            //redirect dengan pesan sukses
            return redirect()->route('updatevisimisi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatevisimisi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visimisi $visimisi)
    {
        //
    }
}
