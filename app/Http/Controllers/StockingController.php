<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stocking;

class StockingController extends Controller
{
    public function form(){
        $stocking = Stocking::all();
        //return view('dash.addStockForm', compact('stocking'));
        return view('dash.addStockForm',['stocking' => $stocking]);
    }

    public function stocking(){
        //$stocking = Stocking::all(); /*select * from stocking*/
        $stocking = Stocking::join('produk','stockings.productId','=','produk.id')
            ->join('users','stockings.supplierId','=','users.id')
            ->join('users','stockings.usersId','=','users.id')
            ->get(['stockings.*','produk.name', 'users.name', 'users.name']);

        //return view('dash.showStockingForm', compact('stocking'));
        return view('dash.showStockingForm',['stocking' => $stocking]);
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
