<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeatsinkController extends Controller
{
    public function heatsink(){
        return view('heatsink');
    }
}
