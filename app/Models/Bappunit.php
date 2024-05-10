<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bappunit extends Model
{
    use HasFactory;

    protected $table = 'Bappunit'; // Nama tabel database

    protected $fillable = [
        'hari_tanggal',
        'no_quotation',
        'no_code_unit',
        'no_model',
        'job_time_start_date',
        'job_time_start_time',
        'job_time_finish_date',
        'job_time_finish_time',
        'wo',
        'mhr_total',
        // Tambahkan atribut lainnya sesuai kebutuhan
    ];

    // Relasi ke model Bappmanpower
    public function bappmanpower()
    {
        return $this->hasOne(Bappmanpower::class, 'bappunit_id');
    }
}