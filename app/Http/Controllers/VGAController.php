<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VGAController extends Controller
{
    public function index(){
        $vga = DB::table('vga')->get();
        return view('vga',['vga' => $vga]);
    }
}
