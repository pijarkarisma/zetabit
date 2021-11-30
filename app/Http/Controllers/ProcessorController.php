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

        // $processors = DB::table('processor')
        //     ->select('processor.*','produk.manufaktur')
        //     ->join('beans','products.idBeans','=','beans.id')
        //     ->get();

        return view('dash.products.showProcessor',compact('processors'));
    }

    public function addProcessor(){
        $processors = new Processor();

        //model->columnName = request('field_name');
        $processors->produkId = \request('produkId');
        $processors->tipe = \request('tipe');
        $processors->gen = \request('gen');
        $processors->deskripsi = \request('deskripsi');

        $processors->save();//Insert into table beans(id,beansName, origin, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('processorform')->with('success','Processor added successfully');
    }
}
