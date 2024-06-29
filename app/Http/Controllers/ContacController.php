<?php

namespace App\Http\Controllers;

use App\Models\Contac;
use Illuminate\Http\Request;

class ContacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contac = Contac::all();
        return view('contac.index')->with('contac',$contac);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contac.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi dan simpan data
         $val = $request->validate([
            'nama' => "required|unique:menus",
            'alamat' => 'required',
            'no_telp' => 'required',
            'pesan' => 'required'
        ]);

        Contac::create($val);

        return redirect()->route('contac.index')->with('success',$val['kode'], 'Contac berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contac $contac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contac $contac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contac $contac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contac $contac)
    {
        //
    }
}
