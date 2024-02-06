<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\lembur;

class LemburController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lks = lembur::with('karyawan')->get();
        dd($lks);
        return view('lembur.index')->with('lks', $lks);
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
        $request->validate([
            'karyawan_id' => 'required'
        ]);

        $lks = lembur::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => $request->tanggal,
            'hari' => $request->hari,
            'roster' => $request->roster,
            'keterangan' => $request->keterangan,
            'uraian' => $request->uraian,
            'jam_dari' => $request->jam_dari,
            'jam_sampai' => $request->jam_sampai,
            'jumlah' => $request->jumlah,
            'total_lembur' => $request->total_lembur,
        ])->with('karyawan')->get();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
