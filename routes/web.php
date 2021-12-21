<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StockingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckAvatarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Redirect after login or register
Route::get('/home', function(){
    return view('landing');
})->middleware(['auth','verified','prevent-back-history'])->name('home');

//Homepage
Route::get('/', function () {
    return view('landing');
})->middleware('prevent-back-history')->name('landing');

//Redirect if admin
Route::get('/admin',function(){
    if (Gate::denies('isAdmin')){
        abort(403);
    }
    else{
        return view('dash/dashboard');
    }
})->middleware('prevent-back-history')->name('admin');

//Halaman Profile
Route::get('/profile', [UserController::class, 'profile'])
->middleware(['auth','verified','prevent-back-history'])->name('profile');

Route::post('/profile', [UserController::class, 'update_profile'])
->middleware(['auth','verified','prevent-back-history'])->name('updateprofile');

Route::post('/profile/delete-avatar', [UserController::class, 'delete_avatar'])
->middleware(['auth','verified','prevent-back-history'])->name('deleteavatar');

Route::get('/superadmin',function(){
    if (Gate::denies('isSuperAdmin')){
        abort(403);
    }
    else{
        return view('superadmin.dashboard');
    }
})->middleware(['auth','verified','prevent-back-history'])->name('superadmin');


//Halaman Komponen PC
Route::get('/komponen-pc', function () {
    return view('productPage.komponenpc');
})->name('komponenpc');

//Halaman Notebook
Route::get('/notebook', function () {
    return view('productPage.notebook');
})->name('notebook');

//Halaman All-In-One PC
Route::get('/aio-pc', function () {
    return view('productPage.aiopc');
})->name('aiopc');

// Route::get('shopping-cart', function(){
//     return view('shopping-cart');
// })->name('cart');

Route::get('shopping-cart', [CartController::class, 'index'])->name('cart');
Route::get('cart-detail', [CartDetailController::class, 'store'])->name('cartdetail');
// Route::patch('kosongkan/{id}', [CartController::class, 'kosongkan'])->name('cartclear');
Route::patch('/clear-cart/{id}',[CartController::class, 'kosongkan'])->name('cartclear');

Route::get('/super',function(){
    return view('superadmin.dashboard');
})->name('super');

// Route::get('/shopping-cart', function(){
//     return view('cart');
// })->name('cart');

Route::get('/admin/produk',function(){
    return view('produk');
})->name('produk');

Route::get('/dash',function(){
    return view('dash/dashboard');
});

//Search product
Route::get('/search', [ProdukController::class, 'search'])->name('search');

// Shopping cart
Route::group(['middleware' => 'auth'], function() {
    // cart
    Route::resource('cart', '\App\Http\Controllers\CartController');
    // Route::patch('kosongkan/{id}', 'CartController@kosongkan');
    // cart detail
    Route::resource('cartdetail', '\App\Http\Controllers\CartDetailController');
});

// Route::resource('cart', '\App\Http\Controllers\CartController');
//     Route::patch('kosongkan/{id}', 'CartController@kosongkan');
//     // cart detail
//     Route::resource('cartdetail', '\App\Http\Controllers\CartDetailController');

// Route::post('cartdetail', [CartDetailController::class, 'store'])->name('cartdetail-store');
// Route::post('cartdetail', [CartDetailController::class, 'update'])->name('cartdetail.update');
// Route::resource('cart', [CartController::class, 'index']);

//Halaman detail produk
// Route::get('product-detail', [ProdukController::class, 'productDetail'])->name('product-detail');
Route::get('/product-detail/{id}',[ProdukController::class, 'productDetail'])->name('product-detail');

// Halaman Katalog Processor
Route::get('processor-catalog', [ProdukController::class, 'processorCatalog'])->name('processor-catalog');

//Produk
Route::get('produk', [ProdukController::class, 'produk'])->middleware(['prevent-back-history'])->name('showproduk');
Route::get('produkform', [ProdukController::class, 'form'])->middleware(['prevent-back-history'])->name('produkform');
Route::delete('destroyproduk/{id}', [ProdukController::class, 'destroy']);
Route::get('editproduk/{id}', [ProdukController::class, 'edit']);
Route::put('updateproduk/{id}', [ProdukController::class, 'update']);
Route::put('stockupdate/{id}/{quantity}', [ProdukController::class, 'stockupdate']);
Route::post('addproduk', [ProdukController::class, 'addProduk'])->name('addproduk');

//Kategori
Route::get('kategori', [KategoriController::class, 'kategori'])->name('showkategori');
Route::get('kategoriform', [KategoriController::class, 'form'])->name('kategoriform');
Route::post('addkategori', [KategoriController::class, 'addKategori'])->name('addkategori');

//User
Route::get('user', [UserController::class, 'user'])->name('showuser');
Route::get('userform', [UserController::class, 'form'])->name('userform');
Route::delete('destroyuser/{id}', [UserController::class, 'destroy']);
Route::get('edituser/{id}', [UserController::class, 'edit']);
Route::put('updateuser/{id}', [UserController::class, 'update']);
Route::post('adduser', [UserController::class, 'add'])->name('adduser');

//Delivery
Route::get('delivery', [DeliveryController::class, 'delivery'])->name('showdelivery');
Route::get('deliveryform', [DeliveryController::class, 'form'])->name('deliveryform');
Route::post('adddelivery', [DeliveryController::class, 'addDelivery'])->name('adddelivery');

//Supplier
Route::get('supplier', [SupplierController::class, 'supplier'])->name('showsupplier');
Route::get('supplierform', [SupplierController::class, 'form'])->name('supplierform');
Route::post('addsupplier', [SupplierController::class, 'addSupplier'])->name('addsupplier');

//Checkout
Route::get('payment', [CheckoutController::class, 'payment'])->name('showpayment');
Route::get('shipped', [CheckoutController::class, 'shipped'])->name('showshipped');
Route::get('checkoutform', [CheckoutController::class, 'form'])->name('checkoutform');
Route::post('addcheckout', [CheckoutController::class, 'addCheckout'])->name('addcheckout');

//Stocking
Route::get('stocking', [StockingController::class, 'stocking'])->name('showstocking');
// Route::delete('destroystock/{id}', 'StockingController@destroy');
Route::delete('destroystock/{id}', [StockingController::class, 'destroy']);
Route::get('editstock/{id}', [StockingController::class, 'edit']);
Route::put('updatestock/{id}', [StockingController::class, 'update']);
Route::get('stockingform', [StockingController::class, 'form'])->name('stockingform');
Route::post('addstocking', [StockingController::class, 'addStocking'])->name('addstocking');

//Order
Route::get('order', [OrderController::class, 'order'])->name('showorder');
Route::get('orderform', [OrderController::class, 'form'])->name('orderform');
Route::post('addorder', [OrderController::class, 'addOrder'])->name('addorder');

//Order_Details
Route::get('order_details', [OrderDetailController::class, 'order_details'])->name('showorderdetail');
Route::get('orderform', [OrderDetailController::class, 'form'])->name('orderorderdetail');
Route::post('addorderdetail', [OrderDetailController::class, 'addOrderDetail'])->name('addorderdetail');

//Wishlist
Route::get('wishlist', [WishlistController::class, 'wishlist'])->name('showwishlist');
Route::get('wishlistform', [WishlistController::class, 'form'])->name('wishlistform');
Route::post('addwishlist', [WishlistController::class, 'addWishlist'])->name('addwishlist');

require __DIR__.'/auth.php';
