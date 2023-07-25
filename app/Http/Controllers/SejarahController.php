<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarahs = Sejarah::latest()->paginate(1);
        return view('home.desa.sejarah.indexsejarah', compact('sejarahs'));
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
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sejarah = Sejarah::find($id);
        return view('home.desa.sejarah.editsejarah', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sejarah $sejarah, $id)
    {
        $this->validate($request, [
            'content'     => 'required'
        ]);
            $sejarah = Sejarah::find($id);
            $sejarah->update([
                'content'   => $request->content
            ]);

        //redirect to index
        if($sejarah){
            //redirect dengan pesan sukses
            return redirect()->route('updatesejarah.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatesejarah.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah)
    {
        //
    }
}
