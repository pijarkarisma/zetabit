<?php

namespace App\Http\Controllers;

use App\Models\Heatsink;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeatsinkController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addHeatsinkForm', compact('produks'));
    }

    public function heatsink(){
        $heatsink = Heatsink::all();
        return view('dash.products.showHeatsink',compact('heatsink'));
    }

    public function addHeatsink(){
        $heatsink = new Heatsink();

        //model->columnName = request('field_name');
        $heatsink->produkId = \request('produkId');
        $heatsink->watt = \request('watt');
        $heatsink->material = \request('material');
        $heatsink->size = \request('size');
        $heatsink->weight = \request('weight');
        $heatsink->rpm = \request('rpm');

        $heatsink->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('heatsinkform')->with('success','Heatsink added successfully');
    }
}
