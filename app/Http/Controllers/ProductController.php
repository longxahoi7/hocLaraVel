<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function showProduct()
    {
        $products = [
            [
                'id' => '1',
                'name' => "Iphone 11",
                'price' => '10000000'
            ],
            [
                'id' => '2',
                'name' => "Iphone 19",
                'price' => '122222222'
            ]
        ];
        return view('list-product')->with([
            'products' => $products
        ]);
    }
    // public function getProduct($id)
    // {
    //     echo $id;
    // }
    // public function updateProduct(Request $request)
    // {
    //     echo $request->id . "</br>";
    //     echo $request->name;
    // }
}
