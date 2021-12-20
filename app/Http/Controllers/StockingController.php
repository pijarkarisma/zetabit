<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stocking;
use App\Models\Produk;
use App\Models\Supplier;
use App\Models\User;

class StockingController extends Controller
{
    public function form(){
        $user = User::all();
        $supplier = Supplier::all();
        $produk = Produk::all();
        return view('dash.products.addStockForm', compact('user', 'supplier', 'produk'));
        //return view('dash.products.addStockForm',['stocking' => $stocking]);
    }

    public function stocking(){
        //$stocking = Stocking::all(); /*select * from stocking*/
        $stocking = Stocking::join('produk','stockings.productId','=','produk.id')
            ->join('suppliers','stockings.supplierId','=','suppliers.id')
            ->join('users','stockings.userId','=','users.id')
            ->get(['stockings.*','produk.produkName', 'suppliers.company', 'users.name']);

        return view('dash.products.showStocking', compact('stocking'));
        //return view('dash.products.showStockingForm',['stocking' => $stocking]);
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

    public function destroy($id)
    {
        $stocking = Stocking::find($id);
        $stocking->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }

    public function edit($id)
    {
        $user = User::all();
        $supplier = Supplier::all();
        $produk = Produk::all();

        $stocking = Stocking::find($id);
        return view('dash.products.editStockForm', compact('stocking','user', 'supplier', 'produk'));
    }

    public function update(Request $request, $id)
    {
        $stocking = Stocking::find($id);
        $stocking->stockDate = $request->input('stockDate');
        $stocking->productId = $request->input('productId');
        $stocking->supplierId = $request->input('supplierId');
        $stocking->userId = $request->input('userId');
        $stocking->quantity = $request->input('quantity');
        $stocking->price = $request->input('price');
        $stocking->update();

        return redirect()->back()->with('success','Stock updated Successfully');
    }
}
