<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){   
        return view('Productos.index'); //retornar una lista de productos
    }

    public function create(){
        return view('Productos.create');//Formulario para la creacion de un producto
    }

    public function show($name){
        //echo "Producto: $name";
        return view('Productos.show');//retorna el detalle de un producto
    }
}
