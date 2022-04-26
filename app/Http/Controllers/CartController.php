<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use PhpParser\Node\Expr\Cast\String_;

class CartController extends Controller
{
    public function show(Request $request){
        $Cart = $request->session()->get('Cart');
        return view('cart.show',compact('Cart'));
    }

    public function add(Product $product){
        $Cart = session()->get('Cart');
        $Cart->add($product);
        return view('cart.show',compact('Cart'));
    }

    public function remove(Product $product){
        $Cart = session()->get('Cart');
        $Cart->remove($product);
        return view('cart.show',compact('Cart'));
    }

    public function removeAll(Product $product){
        $Cart = session()->get('Cart');
        $Cart->removeAll($product);
        return view('cart.show',compact('Cart'));
    }

    public function operation(String $sOperation, Product $product, Request $request){
        $Cart = $request->session()->get('Cart');
        switch($sOperation){
            case "add":         $Cart->add($product)        ;break;
            case "remove":      $Cart->remove($product)     ;break;
            case "removeAll":   $Cart->removeAll($product)  ;break;
            default: "Error";
        }
         return view('cart.show',compact('Cart'));
    }
}
