<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatteryController extends Controller
{
    
    public function battery(){
        return view('battery');
    }
}
