<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    use HasFactory;
    public $table = 'cutis';
    protected $fillable = [
        'karyawan_id',
        'keperluan',
        'awal_cuti',
        'akhir_cuti',
        'total_cuti',
        'sisa_cuti',
        'periode_cuti'
        // tabelkaryawan hanya berisi data karyawa
        // tabel cuti berisi waktu cuti karyawan
        // absen ada cuti, jadi jika absen karena cuti ambil dari tabel cuti
    ];


    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
