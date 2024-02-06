<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lembur extends Model
{
    use HasFactory;
    public $table = 'lembur';
    protected $fillable = [
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
}
