<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuti;
use App\Models\karyawan;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lks = Cuti::all();
        $ky = karyawan::all();
        // dd($cutis);
        return view('cuti.index', compact('lks', 'ky'));
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

        $lks = Cuti::create([
            'karyawan_id' => $request->karyawan_id,
            'keperluan' => $request->keperluan,
            'awal_cuti' => $request->awal_cuti,
            'akhir_cuti' => $request->akhir_cuti,
            'total_cuti' => $request->total_cuti,
            'sisa_cuti' => $request->sisa_cuti,
            'periode_cuti' => $request->periode_cuti,
        ])->with('karyawan')->get();
// untuk total cuti dihitung dari awal - akhir
// sisa cuti dari total cuti dikurang jatah cuti
// kurang jatah cuti

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
