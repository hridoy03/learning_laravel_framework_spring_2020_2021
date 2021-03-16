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

    public function eEdit(Request $request,$id)
    { 
        $product = Product::where('id',$id)
                    ->where('status','existing')            
                    ->first();

            return view('product.eEdit',compact('id','product'));

    }

    public function uEdit(Request $request,$id)
    { 
        $product = Product::where('id',$id)
                    ->where('status','upcoming')            
                    ->first();

            return view('product.eEdit',compact('id','product'));

    }

    public function eUpdate(ProductUpdateRequest $request,$id)
    { 

        $product = Product::find($id);

        if($product)
        {
            $product->product_name = $request->product_name;
            $product->category = $request->category;
            $product->unit_price = $request->unit_price;
            $product->status = $request->status;
            if($product->save())
            {
                return redirect()->route('product.existing');
            }
            else
            {

                return redirect()->route('product.existing.edit',['id'=>$id]);
            }

        }
        else
        {
            return redirect()->route('product.existing.edit',['id'=>$id]);
            
        }

    }

    public function uUpdate(ProductUpdateRequest $request,$id)
    { 

        $product = Product::find($id);

        if($product)
        {
            $product->product_name = $request->product_name;
            $product->category = $request->category;
            $product->unit_price = $request->unit_price;
            $product->status = $request->status;
            if($product->save())
            {
                return redirect()->route('product.upcoming');
            }
            else
            {

                return redirect()->route('product.upcoming.edit',['id'=>$id]);
            }

        }
        else
        {
            return redirect()->route('product.upcoming.edit',['id'=>$id]);
            
        }

    }

    public function eDelete(Request $request,$id)
    { 
        $product = Product::find($id);
        if($product)
        {
            $product->delete();
        }

        return redirect()->route('product.existing');
    }

    public function uDelete(Request $request,$id)
    { 
        $product = Product::find($id);
        if($product)
        {
            $product->delete();
        }

        return redirect()->route('product.upcoming');
    }

}