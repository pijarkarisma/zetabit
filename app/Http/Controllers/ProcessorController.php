<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addProcessorForm', compact('produks'));
    }

    public function processor(){
        $processors = Processor::all();
        return view('dash.products.showProcessor',compact('processors'));
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
        
        $processors->produkId = \request('id');
        $processors->tipe = \request('tipe');
        $processors->gen = \request('gen');
        $processors->deskripsi = \request('deskripsi');

        $processors->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('processorform')->with('success','Processor added successfully');
    }
}
