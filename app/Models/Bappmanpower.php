<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bappmanpower extends Model
{
    use HasFactory;

    protected $table = 'Bappmanpower'; // Nama tabel database

    protected $fillable = [
        'karyawan_id',
        'service_product',
        'service_product_desc',
        'mhr',
        'bappunit_id',
    ];

    // Relasi ke model Bappunit
    public function bappunit()
    {
        return $this->belongsTo(Bappunit::class, 'bappunit_id');
    }
    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
