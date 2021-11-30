<?php

namespace App\Http\Controllers;

use App\Models\Os;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OSController extends Controller
{
    public function form(){
        $produks = Produk::all();
        return view('dash.products.addOsForm', compact('produks'));
    }

    public function os(){
        $os = Os::all();

        // $processors = DB::table('processor')
        //     ->select('processor.*','produk.manufaktur')
        //     ->join('beans','products.idBeans','=','beans.id')
        //     ->get();

        return view('dash.products.showOs',compact('os'));
    }

    public function addOs(){
        $os = new Os();

        //model->columnName = request('field_name');
        $os->produkId = \request('produkId');
        $os->tipe = \request('tipe');

        $os->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('osform')->with('success','OS added successfully');
    }
}
