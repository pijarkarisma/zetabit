<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index(){
        $produk = DB::table('produk')->get();
        return view('product',['product' => $produk]);
    }
}
