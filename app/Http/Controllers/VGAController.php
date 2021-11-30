<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\vga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VGAController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addProcessorForm', compact('produks'));
    }

    public function vga(){
        $vga = vga::all();
        return view('vga',['vga' => $vga]);
    }

    public function addVga()
    {
        $vga = new vga();

        //model->columnName = request('field_name');
        $vga->id = \request('produkId');
        $vga->tipe = \request('nama');

        $vga->save();
        return redirect()->route('vgaform')->with('success','VGA added successfully');
    }
}
