<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\Produk;
use App\Models\User;

class WishlistController extends Controller
{
    public function form(){
        $user = User::all(); /*select * from order*/
        $produk = Produk::all(); /*select * from order*/
        //return view('dash.products.addOrderForm',['order' => $order]);
        return view('dash.products.addWishlistForm', compact('user','produk'));
    }
    
    public function wishlist(){
        $wishlist = Wishlist::join('produk','wishlist.productId','=','produk.id')
            ->join('users','wishlist.userId','=','users.id')
            ->get(['wishlist.*', 'produk.produkName', 'users.name']);
        return view('dash.products.showWishlist', compact('wishlist'));
        //return view('dash.products.showWishlist',['wishlist' => $wishlist]);
    }

    public function addWishlist()
    {
        $wishlist = new Wishlist();

        //model->columnName = request('field_name');
        $wishlist->id = \request('id');
        $wishlist->company = \request('productId');
        $wishlist->email = \request('userId');

        $wishlist->save();//Insert into table wishlist(id, productId, userId) value(?,?,?);
        return redirect()->route('wishlistform')->with('success','Wishlist added successfully');
    }
}
