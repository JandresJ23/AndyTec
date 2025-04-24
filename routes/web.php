<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::prefix('/Productos')->controller(ProductController::class)->group(function(){
    Route::get('/','index');
    Route::get('/create','create');
    Route::post('/', 'store')->name('productos.store');
    Route::get('/{name}','show');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);