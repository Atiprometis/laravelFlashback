<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getProducts extends Controller
{
    public function showProducts()
    {
        $respon = Http::get('https://dummyjson.com/products');

        if($respon->successful()){
            $products = $respon->json()['products'];
            return view('home.homepage', compact('products'));
    }
    return[];
    }
}
