<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function form(){
        $produk = Produk::all();
        return view('dash.addProdukForm', compact('produk'));
    }

    public function produk(){
        //$produk = Produk::all(); /*select * from produk*/
        
        $produk = Produk::join('kategori','produk.kategoriId','=','kategori.id')
            ->get(['produk.*', 'kategori.name']);

        return view('dash.products.showProcessor', compact('produk'));
    }

    public function addProduk()
    {
        $produk = new Produk();

        //model->columnName = request('field_name');
        $produk->id = \request('id');
        $produk->kategoriId = \request('kategoriId');
        $produk->name = \request('name');
        $produk->brand = \request('brand');
        $produk->model = \request('model');
        $produk->deskripsi = \request('deskripsi');
        $produk->image = \request('image');
        $produk->garansi = \request('garansi');
        $produk->harga = \request('harga');
        $produk->stock = \request('stock');
        $produk->terjual = \request('terjual');

        $produk->save();//Insert into table produk(id, kategoriId, brand, model, deskripsi, garansi, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?,?,?,?,?);
        return redirect()->route('produkform')->with('success','Produk added successfully');
    }
}
