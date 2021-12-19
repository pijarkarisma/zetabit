<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function form(){
        $kategori = Kategori::all(); /*select * from kategori*/
        return view('dash.addKategoriForm',['kategori' => $kategori]);
    }

    public function kategori(){
        $kategori = Kategori::all(); /*select * from kategori*/
        return view('dash.showKategoriForm',['kategori' => $kategori]);
    }

    public function addKategori()
    {
        $kategori = new Kategori();

        //model->columnName = request('field_name');
        $kategori->id = \request('id');
        $kategori->name = \request('name');

        $kategori->save();//Insert into table kategori(id, nama) value(?,?);
        return redirect()->route('kategoriform')->with('success','Kategori added successfully');
    }
}
