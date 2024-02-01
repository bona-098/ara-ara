<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nrp_baru')->nullable();
            $table->string('nama')->nullable();
            $table->string('user_terupdate')->nullable();
            $table->string('category_transaksi')->nullable();
            $table->string('user')->nullable();
            $table->string('customer')->nullable();
            $table->string('asal_penerimaan')->nullable();
            $table->string('area_penagihan')->nullable();
            $table->string('support_area')->nullable();
            $table->string('job_penagihan')->nullable();
            $table->string('department')->nullable();
            $table->string('job_group_after')->nullable();
            $table->string('job_position_after')->nullable();
            $table->string('job_title')->nullable();
            $table->string('area_kerja')->nullable();
            $table->string('job')->nullable();
            $table->string('development')->nullable();
            $table->string('hiring')->nullable();
            $table->string('course')->nullable();
            $table->string('alokasi_pembebanan')->nullable();
            $table->string('status_penempatan')->nullable();
            $table->string('kategori')->nullable();
            $table->string('no_kontrak_1')->nullable();
            $table->date('awal_kontrak_1')->nullable();
            $table->date('akhir_kontrak_1')->nullable();
            $table->string('no_kontrak_2')->nullable();
            $table->date('awal_kontrak_2')->nullable();
            $table->date('akhir_kontrak_2')->nullable();
            $table->string('no_kontrak_3')->nullable();
            $table->date('awal_kontrak_3')->nullable();
            $table->date('akhir_kontrak_3')->nullable();
            $table->string('no_kartap')->nullable();
            $table->date('tanggal_kartap')->nullable();
            $table->string('status_karyawan')->nullable();
            $table->string('lama_kerja')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('usia')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat_tempat_tinggal')->nullable();
            $table->string('status_pajak')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->date('tgl_update')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('ktp')->nullable();
            $table->string('no_npwp')->nullable();
            $table->string('bpjs_ketenagakerjaan')->nullable();
            $table->string('bpjs_kesehatan')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('atas_nama_rekening')->nullable();
            $table->string('email')->nullable();
            $table->string('update')->nullable();
            $table->string('keterangan')->nullable();
            $table->date('tanggal_resign')->nullable();
            $table->string('mess_luar_mess')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
