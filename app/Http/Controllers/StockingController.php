<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stocking;
use App\Models\Produk;
use App\Models\User;

class StockingController extends Controller
{
    public function form(){
        $user = User::all();
        $produk = Produk::all();
        return view('dash.addStockForm', compact('user','produk'));
        //return view('dash.products.addStockForm',['stocking' => $stocking]);
    }

    public function stocking(){
        //$stocking = Stocking::all(); /*select * from stocking*/
        $stocking = Stocking::join('produk','stockings.productId','=','produk.id')
            ->join('users','stockings.supplierId','=','users.id')
            ->join('users','stockings.usersId','=','users.id')
            ->get(['stockings.*','produk.produkName', 'users.name', 'users.name']);

        return view('dash.showStocking', compact('stocking'));
        //return view('dash.products.showStockingForm',['stocking' => $stocking]);
    }

    public function addStocking()
    {
        $stocking = new Stocking();

        //model->columnName = request('field_name');
        $stocking->id = \request('id');
        $stocking->stockDate = \request('stockDate');
        $stocking->productId = \request('productId');
        $stocking->supplierId = \request('supplierId');
        $stocking->userId = \request('userId');
        $stocking->quantity = \request('quantity');
        $stocking->price = \request('price');

        $stocking->save();//Insert into table stocking(id, stockDate, productId, supplierId, userId, quantity, price) value(?,?,?,?,?,?,?);
        return redirect()->route('stockingform')->with('success','Stocking added successfully');
    }
}
