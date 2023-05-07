<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function oneProduct($id){
        $data['oneproduct']=Product::where('id',$id)->get();

        return view('front.products.oneproduct')->with($data);
    }

    public function addToCart($id){


        return view('front.addtocart');
    }

    public function productByBrand($brand){
        $data['productbybrand']=Product::select()->where('brand',$brand)->get();
        return view('front.products.productByBrand')->with($data);
    }
}
