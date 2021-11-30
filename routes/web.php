<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessorController;

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

Route::get('/admin/produk',function(){
    return view('vga');
});

Route::get('/dash',function(){
    return view('dash/dashboard');
});

require __DIR__.'/auth.php';
