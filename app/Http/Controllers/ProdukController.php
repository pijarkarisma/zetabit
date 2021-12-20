<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function form(){
        $kategori = Kategori::all();
        return view('dash.products.addProdukForm', compact('kategori'));
    }

    public function produk(){
        //$produk = Produk::all(); /*select * from produk*/
        
        $produk = Produk::join('kategori','produk.kategoriId','=','kategori.id')
            ->get(['produk.*', 'kategori.kategoriName']);

        return view('dash.products.showProduk', compact('produk'));
    }

    public function addProduk()
    {
        $filename="";
        if(\request()->hasFile('image')){
            $img = \request()->file('image');
            $filename= time().'.'.$img->getClientOriginalExtention();
            \request()->file('image')->move(public_path('images', $filename));
            $produk = new Produk([
                "id" => \request()->input('id'),
                "kategoriId" => \request()->input('kategoriId'),
                "produkName" => \request()->input('produkName'),
                "brand" => \request()->input('brand'),
                "model" => \request()->input('model'),
                "deskripsi" => \request()->input('deskripsi'),
                "image" => $filename,
                "garansi" => \request()->input('garansi'),
                "harga" => \request()->input('harga'),
                "stock" => \request()->input('stock'),
                "terjual" => \request()->input('terjual')
            ]);    
            $produk->save();//Insert into table produk(id, kategoriId, brand, model, deskripsi, garansi, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?,?,?,?,?);
            return redirect()->route('produkform')->with('success','Produk added successfully');
        }
        else{
            return redirect()->route('produkform')->with('error','Failed to add product');
        }

        // $produk = new Produk();
        // //model->columnName = request('field_name');
        // $produk->id = \request('id');
        // $produk->kategoriId = \request('kategoriId');
        // $produk->produkName = \request('produkName');
        // $produk->brand = \request('brand');
        // $produk->model = \request('model');
        // $produk->deskripsi = \request('deskripsi');
        // // $produk->image = \request('image');
        // $produk->garansi = \request('garansi');
        // $produk->harga = \request('harga');
        // $produk->stock = \request('stock');
        // $produk->terjual = \request('terjual');
    }
}
