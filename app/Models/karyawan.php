<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $fillable = [
        'nrp_baru',
        'nama',
        'user_terupdate',
        'category_transaksi',
        'user',
        'customer',
        'asal_penerimaan',
        'area_penagihan',
        'support_area',
        'job_penagihan',
        'department',
        'job_group_after',
        'job_position_after',
        'job_title',
        'area_kerja',
        'job',
        'development',
        'hiring',
        'course',
        'alokasi_pembebanan',
        'status_penempatan',
        'kategori',
        'no_kontrak_1',
        'awal_kontrak_1',
        'akhir_kontrak_1',
        'no_kontrak_2',
        'awal_kontrak_2',
        'akhir_kontrak_2',
        'no_kontrak_3',
        'awal_kontrak_3',
        'akhir_kontrak_3',
        'no_kartap',
        'tanggal_kartap',
        'status_karyawan',
        'lama_kerja',
        'tempat_lahir',
        'tanggal_lahir',
        'usia',
        'jenis_kelamin',
        'agama',
        'alamat_tempat_tinggal',
        'status_pajak',
        'status_perkawinan',
        'tgl_update',
        'pendidikan_terakhir',
        'unit_kerja',
        'no_telp',
        'ktp',
        'no_npwp',
        'bpjs_ketenagakerjaan',
        'bpjs_kesehatan',
        'nama_bank',
        'no_rekening',
        'atas_nama_rekening',
        'email',
        'update',
        'keterangan',
        'tanggal_resign',
        'mess_luar_mess',
    ];

    public function lemburs()
    {
        return $this->hasMany(Lembur::class, 'karyawan_id');
    }
    public function cutis()
    {
        return $this->hasMany(Cuti::class, 'karyawan_id');
    }
    public function absens()
    {
        return $this->hasMany(Absen::class, 'karyawan_id');
    }
    public function bappmanpowers()
    {
        return $this->hasMany(Bappmanpower::class, 'karyawan_id');
    }
}
