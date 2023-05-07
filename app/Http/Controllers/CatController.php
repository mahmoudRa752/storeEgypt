<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Product;

class CatController extends Controller
{
    public function index(){
        $data['cats']=Cat::all();
        return view('front.category.allcats')->with($data);
    }

    public function showOneCat($id){
        $data['onecatproducts'] = Product::select()->where('cat_id',$id)->get();//Cat::findOrFail($id)


        return view('front.category.cat')->with($data);
    }

    public function productsUnderCat($id){
        $data['prodsOfCat']=Product::where('cat_id',$id)->get();

        return view('front.category.productByCat')->with($data);
    }
}
