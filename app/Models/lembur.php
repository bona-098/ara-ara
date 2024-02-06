<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lembur extends Model
{
    use HasFactory;
    public $table = 'lemburs';
    protected $fillable = [
        'karyawan_id',
        'tanggal',
        'hari',
        'roster',
        'keterangan',
        'uraian',
        'jam_dari',
        'jam_sampai',
        'jumlah',
        'total_lembur'
    ];

    // Relasi many-to-one dengan model Karyawan
    public function karyawans()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
