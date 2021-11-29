<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function laptop(){
        return view('laptop');
    }

    public function allinone(){
        return view('laptop');
    }
}
