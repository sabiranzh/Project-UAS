<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController
{

    //method untuk menampilkan data courses
   public function index(){
    //menarik data dari database
    $divisi=Divisi::all();
   
        return view('admin.contents.Divisi.index', ['divisi' => $divisi ]); 
    }
}
