<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function form(){
        $delivery = Delivery::all(); /*select * from delivery*/
        return view('dash.products.addDeliveryForm',['delivery' => $delivery]);
    }

    public function delivery(){
        $delivery = Delivery::all(); /*select * from delivery*/
        return view('dash.products.showDeliveryForm',['delivery' => $delivery]);
    }

    public function addDelivery()
    {
        $delivery = new Delivery();

        //model->columnName = request('field_name');
        $delivery->id = \request('id');
        $delivery->company = \request('company');
        $delivery->courier_name = \request('courier_name');

        $delivery->save();//Insert into table kategori(id, company, courier_name) value(?,?,?);
        return redirect()->route('deliveryform')->with('success','Delivery added successfully');
    }
}
