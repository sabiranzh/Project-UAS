<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jatahcuti extends Model
{
    use HasFactory;

    protected $table = 'jatahcuti';
     public $timestamps = false;

    //mendefinisakan field yang boleh diisi
    protected $fillable = ['tahun','jumlah','nip'];
}
