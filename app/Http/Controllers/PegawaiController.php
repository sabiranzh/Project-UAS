<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController 
{
    public function index()
    {
        //menarik data dari database
    $pegawai=Pegawai::all();

        return view('admin.contents.Pegawai.index', ['pegawai' => $pegawai,]);
    }
}