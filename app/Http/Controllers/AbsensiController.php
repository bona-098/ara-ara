<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\absen;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data absen dari database dan kelompokkan berdasarkan karyawan_id
        $absens = Absen::with('karyawan')->get()->groupBy('karyawan_id');

        // Inisialisasi array untuk menyimpan daftar tanggal
        $dates = [];

        // Isi array $dates dengan tanggal-tanggal untuk bulan ini
        for ($i = 1; $i <= 28; $i++) {
            $dates[] = date('Y-m-d', strtotime("2024-02-$i"));
        }

        // Ambil daftar status kehadiran yang unik dari semua data absen
        $statuses = Absen::pluck('status')->unique();

        // Hitung jumlah status kehadiran untuk setiap status dan setiap karyawan
        $statusCounts = [];
        foreach ($absens as $karyawan_id => $employeeAbsens) {
            $statusCounts[$karyawan_id] = [];
            foreach ($statuses as $status) {
                $statusCounts[$karyawan_id][$status] = $employeeAbsens->where('status', $status)->count();
            }
        }

        // Pass data absen, daftar tanggal, daftar status, dan jumlah status kehadiran ke view
        return view('absensi.index', compact('absens', 'dates', 'statuses', 'statusCounts'));
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
