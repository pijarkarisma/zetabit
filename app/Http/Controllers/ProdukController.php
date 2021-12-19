<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function produk(){
        $produk = Produk::all();
        return view('product',['product' => $produk]);
    }

    public function addProduk()
    {
        $produk = new Produk();

        //model->columnName = request('field_name');
        $produk->id = \request('id');
        $produk->tipe = \request('tipe');
        $produk->manufaktur = \request('manufaktur');
        $produk->harga = \request('harga');
        $produk->stok = \request('stok');
        $produk->terjual = \request('terjual');
        $produk->garansi = \request('garansi');

        $produk->save();//Insert into table produk(id,tipe, manufaktur, harga, stok, terjual, garansi, created_at,updated_at) value(?,?,?,?,?);
        return redirect()->route('produkform')->with('success','Produk added successfully');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
