<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Http\Controllers\Redirect;

class ProductController extends Controller
{
    static function welcome(){
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

    public function show(Product $product){
        return view('product.show',compact('product'));
    }

    public function addToCart(Product $product, Request $request){
        $Cart = new Cart($request->session()->get('Cart'));
        $Cart->add($product);
        $request->session()->put('Cart', $Cart);
        return redirect()->back()->with('success', 'El producto ha sido añadido al carro.');
    }

    //Funcion de prueba para ver si esta autenticado
    public function prueba_auth(){
        return "<h1>Prueba</h1>";
    }


}
