<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function processor(){
        return view('processor');
    }
}
