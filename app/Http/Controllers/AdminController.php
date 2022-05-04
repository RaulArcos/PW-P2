<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Company;

class AdminController extends Controller
{
    static function index(){
        return view('admin.adm_index');
    }

    public function new_prod(){
        $companies = Company::all();
        $id = array();
        
        return view('admin.adm_new_prod')->with('companies', $companies);
    }

    public function store(ProductRequest $request){
        //print_r($request->all());
        /*
        $prod = Product::create([
            'company_id' => $request->company_id,
            'name' => $request->name,
            'description' => $request->description,
            'imgurl'=>$request->imgurl,
            'price' => $request->price

        ]);
        */
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:255',
            'company_id' => 'required',
            'price' => 'required',
            'imgurl' => 'required'
        ]);

        $prod = New Product;
        
        $prod->company_id = $request->company_id;
        $prod->name = $request->name;
        $prod->description = $request->description;
        $prod->imgurl = $request->imgurl;
        $prod->price = $request->price;

        $prod->save();
        
        return redirect()->route('adm_index');
    }


}
