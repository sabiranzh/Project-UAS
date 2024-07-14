<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;


class Dashboardcontroller
{
    public function index(){
       
        return view('admin.contents.dashboard.index'); 
        }
}
