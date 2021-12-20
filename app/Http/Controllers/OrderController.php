<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function form(){
        $user = User::all(); /*select * from user*/
        //return view('dash.products.addOrderForm',['order' => $order]);
        return view('dash.products.addOrderForm', compact('user'));
    }

    public function order(){
        $order = Order::join('users','order.userId','=','users.id')
            ->get(['order.*', 'users.name']);

        //return view('dash.products.showOrderForm',['order' => $order]);
        return view('dash.products.showOrder', compact('order'));
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
