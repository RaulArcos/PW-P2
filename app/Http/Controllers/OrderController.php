<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use PhpParser\Node\Expr\Cast\String_;

use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function show(Request $request){
        $Cart = $request->session()->get('Cart');
        return view('order.show',compact('Cart'));
    }
}
