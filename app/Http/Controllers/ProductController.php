<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){   

        $listProducts = Product::all();

        return view('Productos.index',[
            'listProducts' => $listProducts
        ]);
    }

    public function create(){
        return view('Productos.create');//Formulario para la creacion de un producto
    }

    public function show($name){
        //echo "Producto: $name";
        return view('Productos.show');//retorna el detalle de un producto
    }
}
