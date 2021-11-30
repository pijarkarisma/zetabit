<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BatteryController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addBatteryForm', compact('produks'));
    }

    public function battery(){
        $battery = Battery::all();
        return view('dash.products.showHBattery',compact('battery'));
    }

    public function addBattery(){
        $battery = new Battery();

        //model->columnName = request('field_name');
        $battery->produkId = \request('produkId');
        $battery->jenis = \request('jenis');
        $battery->nomorSeri = \request('nomorSeri');
        $battery->voltage = \request('voltage');
        $battery->capacity = \request('capacity');

        $battery->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('batteryform')->with('success','Battery added successfully');
    }
}
