<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = [];
        $employees = ['Japersun',];

        for ($i = 1; $i <= 31; $i++) {
            $tanggal = "2024-01-" . sprintf("%02d", $i);
            $absensi[$tanggal] = [];

            foreach ($employees as $employee) {
                $status = ['Hadir', 'Absen', 'Izin', 'Sakit'][array_rand(['Hadir', 'Absen', 'Izin', 'Sakit'])];
                $jam_masuk = $this->generateCheckInTime(); // Generate check-in time (for example purposes)
                $jam_keluar = $this->generateCheckOutTime(); // Generate check-out time (for example purposes)

                // Determine if the employee is late
                $late = $this->isLate($jam_masuk);

                $absensi[$tanggal][$employee] = [
                    'status' => $status,
                    'jam_masuk' => $jam_masuk,
                    'jam_keluar' => $jam_keluar,
                    'late' => $late,
                ];
            }
        }

        $dates = [];
        for ($i = 1; $i <= 31; $i++) {
            $dates[] = date('Y-m-d', strtotime("2024-01-$i"));
        }
        return view('absensi.index', compact('dates', 'absensi', 'employees'));
    }

    private function generateCheckInTime()
    {
        // Generate a random check-in time for demonstration purposes
        return date('H:i', rand(strtotime('08:00'), strtotime('10:00')));
    }

    private function generateCheckOutTime()
    {
        // Generate a random check-out time for demonstration purposes
        return date('H:i', rand(strtotime('16:00'), strtotime('18:00')));
    }

    private function isLate($jam_masuk)
    {
        // Compare check-in time with the threshold (e.g., 8:00 AM)
        return strtotime($jam_masuk) > strtotime('08:00');
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
