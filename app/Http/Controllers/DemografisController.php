<?php

namespace App\Http\Controllers;

use App\Models\Demografis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demografis = Demografis::latest()->paginate(1);
        return view('home.gambaranumum.demografis.indexdemografis', compact('demografis'));
    }

    public function datademografis()
    {
        $demografis = Demografis::all();
        return redirect()->route('demografis')->with('demografis', $demografis);
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
    public function show(Demografis $demografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $demografis = Demografis::find($id);
        return view('home.gambaranumum.demografis.editdemografis', compact('demografis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demografis $demografis, $id)
    {
        $this->validate($request, [
            'isi'     => 'required'
        ]);
            $demografis = Demografis::find($id);
            $demografis->update([
                'isi'   => $request->isi
            ]);

        //redirect to index
        if($demografis){
            //redirect dengan pesan sukses
            return redirect()->route('updatedemografis.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('updatedemografis.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demografis $demografis)
    {
        //
    }
}
