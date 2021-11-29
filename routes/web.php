<?php

use App\Http\Controllers\ProdrukControlle;
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

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/dashboard', function () {
    return view('landing');
})->middleware(['auth'])->name('landing');

Route::get('/admin',function(){
    return view('dash/dashboard');
})->name('admin');

Route::get('/admin/produk',function(){
    return view('produ');
})->name('produk');


Route::get('/admin/produk',[ProdukController::class,'produk'])->name('produk');
// Route::get('/admin/os','OSController@os')->name('os');
// Route::get('/admin/laptop','LaptopController@laptop')->name('laptop');
// Route::get('/admin/allinone','LaptopController@allinone')->name('allinone');
// Route::get('/admin/heatsink','HeatsinkController@heatsink')->name('heatsink');
// Route::get('/admin/battery','BatteryController@battery')->name('battery');
// Route::get('/admin/processor','ProcessorController@processor')->name('processor');
// Route::get('/admin/vga','VGAController@vga')->name('vga');

Route::get('/dash',function(){
    return view('dash/dashboard');
});

require __DIR__.'/auth.php';
