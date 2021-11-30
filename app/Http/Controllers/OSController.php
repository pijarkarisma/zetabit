<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OSController extends Controller
{
    public function index(){
        $os = DB::table('os')->get();
        return view('os',['os' => $os]);
    }
}
