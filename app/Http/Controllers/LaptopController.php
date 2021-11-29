<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaptopController extends Controller
{
    public function index(){
        $laptop = DB::table('laptop')->get();
        return view('laptop',['laptop'=> $laptop]);
    }
}
