<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessorController extends Controller
{
    public function index(){
        $processor = DB::table('processor')->get();
        return view('processor',['processor' => $processor]);
    }
}
