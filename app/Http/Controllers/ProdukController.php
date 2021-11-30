<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function produk(){
        $produk = Produk::all();
        return view('product',['product' => $produk]);
    }

    public function addProduk()
    {
        $produk = new Produk();

        //model->columnName = request('field_name');
        $produk->id = \request('id');
        $produk->tipe = \request('tipe');
        $produk->manufaktur = \request('manufaktur');
        $produk->harga = \request('harga');
        $produk->stok = \request('stok');
        $produk->terjual = \request('terjual');
        $produk->garansi = \request('garansi');

        $produk->save();//Insert into table produk(id,tipe, manufaktur, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('produkform')->with('success','Produk added successfully');
    }
}
