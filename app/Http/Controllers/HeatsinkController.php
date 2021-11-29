<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeatsinkController extends Controller
{
    public function index(){
        $heatsink = DB::table('heatsink')->get();
        return view('heatsink',['heatsink' => $heatsink]);
    }
}
