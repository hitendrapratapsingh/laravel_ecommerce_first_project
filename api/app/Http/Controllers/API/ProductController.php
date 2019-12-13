<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    function save(Request $req)
    {
        $productData = New Products;
        $productData->name->$req->name;
        $productData->price->$req->price;
        $productData->category->$req->category;
        echo $productData->save();

        #return Products::all();
    }
}
