<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order_detail;
use App\Models\Produk;
use App\Models\Order;

class OrderDetailController extends Controller
{
    public function form(){
        $order = Order::all();
        $produk = Produk::all();
        return view('dash.products.showOrderDetailForm', compact('order','produk')); 
        //return view('dash.products.addOrderDetail',['order_detail' => $order_details]);
    }

    public function order_details(){
        $order_details = Order_detail::join('order','order_details.orderId','=','order.id')
            ->join('produk','order_details.productId','=','produk.id')
            ->get(['order.*', 'produk.produkName']);

        return view('dash.products.showOrderDetail', compact('order_details'));    
        //return view('dash.products.showOrderDetail',['order_detail' => $order_details]);
    }

    public function addOrderDetail()
    {
        $order_details = new Order_detail();

        //model->columnName = request('field_name');
        $order_details->orderId = \request('orderId');
        $order_details->productId = \request('productId');
        $order_details->quantity = \request('quantity');
        $order_details->price = \request('price');

        $order_details->save();//Insert into table order_details(orderId, productId, quantity, price) value(?,?,?,?);
        return redirect()->route('orderdetailform')->with('success','Order Details added successfully');
    }
}
