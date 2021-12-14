<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaptopController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addLaptopForm', compact('produks'));
    }

    public function laptop(){
        $laptop = Laptop::all();
        return view('dash.products.showLaptop',compact('laptop'));
    }

    public function addLaptop(){
        $laptop = new Laptop();

        //model->columnName = request('field_name');
        $laptop->produkId = \request('produkId');
        $laptop->tipe = \request('tipe');

        $laptop->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('osform')->with('success','OS added successfully');
    }
}
