<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order_detail;

class OrderDetailController extends Controller
{
    public function order_details(){
        $order_details = Order_detail::all(); /*select * from order_detail*/
        return view('order_detail',['order_detail' => $order_details]);
    }

    public function addOrder()
    {
        $order_details = new Order_detail();

        //model->columnName = request('field_name');
        $order_details->orderId = \request('orderId');
        $order_details->productId = \request('productId');
        $order_details->quantity = \request('quantity');
        $order_details->price = \request('price');

        $order_details->save();//Insert into table order_details(orderId, productId, quantity, price) value(?,?,?,?);
        return redirect()->route('kategoriform')->with('success','Kategori added successfully');
    }
}
