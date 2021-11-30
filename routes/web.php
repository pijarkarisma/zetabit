<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\OSController;
use App\Http\Controllers\HeatsinkController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\BatteryController;
use App\Http\Controllers\VGAController;
use App\Http\Controllers\LaptopController;
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

//Processor
Route::get('processorform', [ProcessorController::class, 'form'])->name('processorform');
Route::post('addprocessor', [ProcessorController::class, 'addProcessor'])->name('addprocessor');
Route::post('processor', [ProcessorController::class, 'processor'])->name('processor');
Route::post('addproduk', [ProdukController::class, 'addProduk'])->name('addprocessor');
Route::post('produk', [ProdukController::class, 'produk'])->name('processor');
Route::get('heatsinkform', [HeatsinkController::class, 'form'])->name('heatsinkform');
Route::post('addheatsink', [HeatsinkController::class, 'addHeatsink'])->name('addheatsink');
Route::post('heatsink', [HeatsinkController::class, 'heatsink'])->name('heatsink');
Route::get('osform', [OSController::class, 'form'])->name('osform');
Route::post('addos', [OSController::class, 'addOs'])->name('addos');
Route::post('os', [OSController::class, 'os'])->name('os');



Route::get('/admin/produk',function(){
    return view('produ');
})->name('produk');


// Route::get('/admin/produk', 'ProdukController@index')->name('produk');
// Route::get('/admin/os','OSController@index')->name('os');
// Route::get('/admin/laptop','LaptopController@index')->name('laptop');
// Route::get('/admin/allinone','LaptopController@index')->name('allinone');
// Route::get('/admin/heatsink','HeatsinkController@index')->name('heatsink');
// Route::get('/admin/battery','BatteryController@index')->name('battery');
// Route::get('/admin/processor','ProcessorController@index')->name('processor');
// Route::get('/admin/vga','VGAController@index')->name('vga');

Route::get('/dash',function(){
    return view('dash/dashboard');
});

require __DIR__.'/auth.php';
