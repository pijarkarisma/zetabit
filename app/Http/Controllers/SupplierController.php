<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function form(){
        $supplier = Supplier::all(); /*select * from supplier*/
        return view('dash.addSupplierForm',['supplier' => $supplier]);
    }

    public function supplier(){
        $supplier = Supplier::all(); /*select * from supplier*/
        return view('dash.showSupplierForm',['supplier' => $supplier]);
    }

    public function addSupplier()
    {
        $supplier = new Supplier();

        //model->columnName = request('field_name');
        $supplier->id = \request('id');
        $supplier->company = \request('company');
        $supplier->email = \request('email');
        $supplier->phoneNumber = \request('phoneNumber');
        $supplier->address = \request('address');

        $supplier->save();//Insert into table supplier(id, company, email, phoneNumber, address) value(?,?,?,?,?);
        return redirect()->route('supplierform')->with('success','Supplier added successfully');
    }
}
