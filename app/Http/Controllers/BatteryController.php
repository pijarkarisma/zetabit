<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BatteryController extends Controller
{
    
    public function index(){
        $battery = DB::table('battery')->get();
        return view('battery', ['battery' => $battery]);
    }
}
