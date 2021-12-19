<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use App\Models\Produk;
use App\Http\Controllers\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessorController extends Controller
{
    public function form(){
        // $produks = Produk::all();
        return view('dash.products.addProcessorForm');
    }

    public function processor(){
        $processors = Processor::all();
        return view('dash.products.showProcessor', compact('processors'));
    }

    public function addProduk(){
        $produks = new Produk();

        $produks->id = \request('id');
        $produks->kategori = 'processor';
        $produks->manufaktur = \request('manufaktur');
        $produks->harga = \request('harga');
        $produks->stok = \request('stok');
        $produks->terjual = \request('terjual');
        $produks->garansi = \request('garansi');
        $produks->tanggal_rilis = \request('tanggal_rilis');
        $produks->save();
    }

    public function addProcessor(){
        $processors = new Processor();

        $this->addProduk();

        $processors->kategoriid = \request('kategoriid');
        $processors->bramd = \request('brand');
        $processors->model = \request('model');
        $processors->deskripsi = \request('deskripsi');
        $processors->harga = \request('harga');
        $processors->stock = \request('stock');
        $processors->terjual = \request('terjual');

        $processors->save();
        return redirect()->route('processorform')->with('success','Processor added successfully');
    }
}
