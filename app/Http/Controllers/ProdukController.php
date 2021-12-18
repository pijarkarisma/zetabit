<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function produk(){
        $produk = Produk::all(); /*select * from produk*/
        return view('product',['product' => $produk]);
    }

    public function addProduk()
    {
        $produk = new Produk();

        //model->columnName = request('field_name');
        $produk->id = \request('id');
        $produk->kategoriId = \request('kategoriId');
        $produk->brand = \request('brand');
        $produk->model = \request('model');
        $produk->deskripsi = \request('deskripsi');
        $produk->garansi = \request('garansi');
        $produk->harga = \request('harga');
        $produk->stock = \request('stock');
        $produk->terjual = \request('terjual');

        $produk->save();//Insert into table produk(id, kategoriId, brand, model, deskripsi, garansi, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?,?,?,?,?);
        return redirect()->route('produkform')->with('success','Produk added successfully');
    }
}
