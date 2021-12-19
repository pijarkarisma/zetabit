<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function checkout(){
        $checkout = Checkout::all(); /*select * from checkout*/
        return view('checkout',['checkout' => $checkout]);
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
