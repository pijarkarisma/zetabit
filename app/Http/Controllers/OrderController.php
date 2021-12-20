<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function form(){
        $order = Order::all(); /*select * from order*/
        return view('dash.products.addOrderForm',['order' => $order]);
        //return view('dash.addOrderForm', compact('order'));
    }

    public function order(){
        $order = Order::join('users','order.userId','=','users.id')
            ->get(['order.*', 'kategori.kategoriName']);

        return view('dash.products.showOrderForm',['order' => $order]);
        //return view('dash.addOrderForm', compact('order'));
    }

    public function addOrder()
    {
        $order = new Order();

        //model->columnName = request('field_name');
        $order->id = \request('id');
        $order->orderDate = \request('orderDate');
        $order->userId = \request('userId');

        $order->save(); //Insert into table order(id, orderDate, userId) value(?,?,?);
        return redirect()->route('orderform')->with('success','Order added successfully');
    }
}
