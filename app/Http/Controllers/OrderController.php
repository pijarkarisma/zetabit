<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(){
        $order = Order::all(); /*select * from order*/
        return view('order',['order' => $order]);
    }

    public function addOrder()
    {
        $order = new Order();

        //model->columnName = request('field_name');
        $order->id = \request('id');
        $order->orderDate = \request('orderDate');
        $order->userId = \request('userId');

        $order->save();//Insert into table order(id, orderDate, userId) value(?,?,?);
        return redirect()->route('kategoriform')->with('success','Kategori added successfully');
    }
}
