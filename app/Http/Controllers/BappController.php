<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bappunit;
use App\Models\Bappmanpower;
use App\Models\karyawan;
use Dompdf\Dompdf;
use PDF;

class BappController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bappData = Bappunit::with('bappmanpower')->get();
        // dd($bappData);
        return view('bapp.index', compact('bappData'));
    }

    public function printPDF()
    {
        $bappData = Bappmanpower::all();

        $pdf = PDF::loadView('pdf.bappmanpower', compact('bappData'));

        return $pdf->download('bappmanpower.pdf');
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
            'hari_tanggal' => 'nullable|date',
            'no_quotation' => 'nullable|string',
            'no_code_unit' => 'nullable|string',
            'no_model' => 'nullable|string',
            'job_time_start_date' => 'nullable|date',
            'job_time_start_time' => 'nullable|date_format:H:i',
            'job_time_finish_date' => 'nullable|date',
            'job_time_finish_time' => 'nullable|date_format:H:i',
            'wo' => 'nullable|string',
            'mhr_total' => 'nullable|integer',
            // Tambahkan validasi untuk atribut lainnya jika diperlukan
        ]);

        // Simpan data BAPP baru
        Bappunit::create($request->all());

        // Redirect ke halaman yang sesuai (misalnya halaman indeks)
        return redirect()->route('bapp.index')->with('success', 'BAPP telah berhasil disimpan.');
    }


    // Fungsi untuk menambah data Bappmanpower
    public function storeBappManpower(Request $request, $bappId)
    {

        $karyawanList = Karyawan::all();
        // Validasi request
        $request->validate([
            'karyawan_id' => 'required|exists:karyawan,id',
            'service_product' => 'required|string',
            'service_product_desc' => 'nullable|string',
            'mhr' => 'required|integer',
        ]);

        // Simpan data Bappmanpower
        $bappManpower = Bappmanpower::create([
            'karyawan_id' => $request->input('karyawan_id'),
            'service_product' => $request->input('service_product'),
            'service_product_desc' => $request->input('service_product_desc'),
            'mhr' => $request->input('mhr'),
            'bappunit_id' => $bappId,
        ]);

        // Redirect atau kembalikan respon ke halaman detail Bappunit dengan menyertakan parameter 'id'
        return redirect()->route('bapp.detail', ['id' => $bappId])->with(['karyawanList' => $karyawanList, 'success' => 'Bappmanpower berhasil ditambahkan.']);
    }



    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        // Temukan data Bappunit berdasarkan ID
        $bappUnit = Bappunit::find($id);
        $karyawanList = Karyawan::all();


        // Pastikan $bappUnit bukan null sebelum melanjutkan
        if (!$bappUnit) {
            abort(404); // Tampilkan halaman error 404 jika data tidak ditemukan
        }

        // Gunakan relasi untuk mengambil data bappmanpower dan karyawan terkait
        $bappManpower = $bappUnit->bappmanpower()->with('karyawan')->get();

        // Tampilkan halaman detail dengan data Bappunit, Bappmanpower, dan Karyawan
        return view('bapp.detail', compact('bappUnit', 'bappManpower', 'karyawanList'));
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
