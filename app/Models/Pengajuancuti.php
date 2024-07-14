<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuancuti extends Model
{
    use HasFactory;

    protected $table = 'pengajuancuti';

    // Menonaktifkan timestamps
    public $timestamps = false;

    // Mendefinisikan field yang boleh diisi
    protected $fillable = [
        'nama', // Pastikan 'nama' juga ada di sini
        'nip',
        'tanggal_awal',
        'tanggal_akhir',
        'jumlah',
        'ket',
        'status'
    ];
}
