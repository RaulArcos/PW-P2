<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{   
    public array $aItem =[];
    public int $iTotalItems = 0;
    public float $dTotalPrice = 0;

    function __construct(Cart $cart=null){
        if($cart != null){
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
            $this->aItem = $cart->aItem;
        }
    }

    public function add(Product $product){
        
            if(!array_key_exists($product->id,$this->aItem)){
                $this->aItem[$product->id] = array('id' => $product->id, 'name' => $product->name, 'imgurl' => $product->imgurl,
                'price' => $product->price, 'quantity' => 1);
               
            }
            else{
                $this->aItem[$product->id]['quantity']++;
            }
            $this->iTotalItems++;
            $this->dTotalPrice += $product->price - ($product->price*$product->discountPercent/100);
       
    }

    public function remove(Product $product){
        if(array_key_exists($product->id,$this->aItem)){
            if( $this->aItem[$product->id]['quantity'] > 0){
                $this->aItem[$product->id]['quantity']--;
                $this->iTotalItems--;
                $this->dTotalPrice -= $product->price - ($product->price*$product->discountPercent/100);
            }
        }
    }

    public function removeAll(Product $product){
        if(array_key_exists($product->id,$this->aItem)){
            $this->iTotalItems -= $this->aItem[$product->id]['quantity'];
            $this->dtotalPrice -= $this->aItem[$product->id]['quantity'] * ($product->price - ($product->price*$product->discountPercent/100));
            unset($this->aItem[$product->id]); //Elimina prod
        }
    }

    use HasFactory;
}
