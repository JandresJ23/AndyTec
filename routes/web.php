<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/Productos', [ProductController::class, 'index']);

Route::get('/Productos/create', [ProductController::class, 'index']);

Route::get('/Productos/{name}',[ProductController::class, 'show']);
