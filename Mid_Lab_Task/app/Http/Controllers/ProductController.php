<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('product.product');
    }

    public function existingProduct(Request $request)
    {

        $products = new Product;
        $products = $products->where('status','existing');

        $products = $products->paginate(20);    

        return view('product.existing')->with('products',$products);
    }

    public function upcomingProduct(Request $request)
    {

        $products = new Product;
        $products = $products->where('status','upcoming');

        $products = $products->paginate(20);    

        return view('product.upcoming')->with('products',$products);
    }

    public function addProduct(Request $request)
    {

        return view('product.addProduct');
    }

}