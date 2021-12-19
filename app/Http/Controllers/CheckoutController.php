<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function form(){
        $checkout = Checkout::all(); /*select * from checkout*/
        return view('dash.addCheckoutForm',['checkout' => $checkout]);
    }
    
    public function checkout(){
        $checkout = Checkout::join('order','checkout.orderId','=','order.id')
            ->join('users','order.userId', '=', 'users.id')
            ->join('delivery','checkout.deliveryId','=','delivery.id')
            ->get(['checkout.*', 'users.name', 'delivery.courier_name']);

        return view('dash.showCheckoutForm',['checkout' => $checkout]);
    }

    public function addCheckout()
    {
        $checkout = new Checkout();

        //model->columnName = request('field_name');
        $checkout->id = \request('id');
        $delivery->orderId = \request('orderId');
        $delivery->costSum = \request('costSum');
        $delivery->phoneNumber = \request('phoneNumber');
        $delivery->paymentMethod = \request('paymentMethod');
        $delivery->deliveryId = \request('deliveryId');
        $delivery->deliveryMode = \request('deliveryMode');

        $delivery->save();//Insert into table delivery(id, orderId, costSum, phoneNumber, paymentMethod, deliveryId, deliveryMode) value(?,?,?);
        return redirect()->route('deliveryform')->with('success','Delivery added successfully');
    }
}
