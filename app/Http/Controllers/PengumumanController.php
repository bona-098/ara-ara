<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peng = pengumuman::get();
        return view('pengumuman.index', compact('peng'));
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
            'foto' => 'file|image|mimes:jpg,png,jpeg,gif|max:50000',
        ]);

        $newnamefoto = null;

        if ($request->hasFile('foto')) {
            $newnamefoto = $request->judul . '-' . date('His') . '.' . $request->file('foto')->extension();
            $request->file('foto')->move(public_path('pengumumin/foto'), $newnamefoto);
        }

        $peng = Pengumuman::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $newnamefoto,
        ]);

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
        $peng = Pengumuman::findOrFail($id);
        $peng->delete();
        return redirect()->back();
    }
}
