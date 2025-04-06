<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/Productos', [ProductController::class, 'index']);
Route::get('/Productos/create', [ProductController::class, 'create']);
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/Productos/{name}',[ProductController::class, 'show']);

