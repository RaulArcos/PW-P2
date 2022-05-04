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
        $prod = Product::create($request->only('name','company_id','description','price'));
        //return redirect()->route('adm_prueba')->with('request', $request);
        return redirect()->route('adm_index');
    }


}
