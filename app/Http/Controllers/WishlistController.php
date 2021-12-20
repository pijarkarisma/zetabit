<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function form(){
        $wishlist = Wishlist::all(); /*select * from wishlist*/
        return view('dash.products.addWishlistForm',['wishlist' => $wishlist]);
    }
    
    public function wishlist(){
        $wishlist = Wishlist::join('produk','wishlist.productId','=','produk.id')
            ->join('users','wishlist.userId','=','users.id')
            ->get(['wishlist.*', 'produk.produkName', 'user.name']);
        return view('dash.products.showWishlistForm',['wishlist' => $wishlist]);
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
