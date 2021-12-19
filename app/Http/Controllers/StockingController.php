<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stocking;

class StockingController extends Controller
{
    public function stocking(){
        $stocking = Stocking::all(); /*select * from stocking*/
        return view('stocking',['stocking' => $stocking]);
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
