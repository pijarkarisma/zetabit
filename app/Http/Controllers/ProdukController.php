<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Produk;
use App\Models\Kategori;
use Image;

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

    public function addProduk(Request $request)
    {
        $produk = new Produk();

        if($request->hasFile('image')){
            // Delete file if user change avatar
            $image = \request('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		Image::make($image)->resize(300, null, function($constraint) {$constraint->aspectRatio();})->save( public_path('/frontend/image/upload/avatar/' . $filename ) );

    		// $user = Auth::user();
            // $produk = new Produk();
    		$produk->image = $filename;
    	}

        //model->columnName = request('field_name');
        $produk->id = \request('id');
        $produk->kategoriId = \request('kategoriId');
        $produk->produkName = \request('produkName');
        $produk->brand = \request('brand');
        $produk->model = \request('model');
        $produk->deskripsi = \request('deskripsi');
        // $produk->image = \request('image');
        $produk->garansi = \request('garansi');
        $produk->harga = \request('harga');
        $produk->stock = \request('stock');
        $produk->terjual = \request('terjual');

        $produk->save();//Insert into table produk(id, kategoriId, brand, model, deskripsi, garansi, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?,?,?,?,?);
        return redirect()->route('produkform')->with('success','Produk added successfully');
    }
}
