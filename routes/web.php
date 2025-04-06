<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/Productos', function () {
    echo "LISTADO DE TODOS LOS PRODUCTOS";
});

Route::get('/Productos/{name}', function ($name) {
    echo "Producto: $name";
});

