<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\product;

class getProducts extends Controller
{
    public function showProducts()
    {
        $respon = Http::get('https://dummyjson.com/products');

        if($respon->successful()){
            $products = $respon->json()['products'];
            return view('product.productpage', compact('products'));
    }
    return[];
    }


}
