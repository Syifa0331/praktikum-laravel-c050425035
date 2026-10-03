<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'index: Halaman daftar seluruh matakuliah';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create: form tambah matakuliah';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store: simpan data baru';
    }

    /**
     * Display the specified resource.
     */
    public function show(matakuliah $matakuliah)
    {
        //$matakuliah = matakuliah::where('kode_mk', $kode)->firstOrFail();

        //return view('matakuliah', compact('matakuliah'));

        return "Nama matakuliah: {$matakuliah->nama_mk}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return "edit: form edit matakuliah id {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matakuliah $matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matakuliah $matakuliah)
    {
        //
    }
}
