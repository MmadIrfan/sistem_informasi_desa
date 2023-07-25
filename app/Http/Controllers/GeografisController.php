<?php

namespace App\Http\Controllers;

use App\Models\Geografis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $geografis = Geografis::latest()->paginate(1);
        return view('home.gambaranumum.geografis.indexgeografis', compact('geografis'));
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
    public function show(Geografis $geografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $geografis = Geografis::find($id);
        return view('home.gambaranumum.geografis.editgeografis', compact('geografis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Geografis $geografis, $id)
    {
        $this->validate($request, [
            'isi'     => 'required'
        ]);
            $geografis = Geografis::find($id);
            $geografis->update([
                'isi'   => $request->isi
            ]);

        //redirect to index
        if($geografis){
            //redirect dengan pesan sukses
            return redirect()->route('updategeografis.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updategeografis.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Geografis $geografis)
    {
        //
    }
}
