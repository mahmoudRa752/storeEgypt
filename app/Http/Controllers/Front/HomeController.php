<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cat;

class HomeController extends Controller
{
    public function index(){
        $this->showAll();
        $this->lastItems();
    }

    public function showAll(){
        $data['allproducts']=Product::all();
        $data['products']=Product::select('id','name','price','bestseller','bestrated','new','sale','rate','image','cat_id')
        ->orderBy('id','desc')
        ->take(4)
        ->get();
        $data['cats']=Cat::all();
        $data['newproducts']=Product::orderBy('created_at','ASC')->take(3)->get();
        $data['topseller']=Product::where('bestseller',1)->take(3)->get();
        $data['randproducts']=Product::select()->inRandomOrder()->limit(3)->get();


        return view('front.home')->with($data);
    }

    public function lastItems(){

        $data['products']=Product::select('id','name','price','bestseller','bestrated','new','sale','rate','image','cat_id')
        ->orderBy('id','desc')
        ->take(4)
        ->get();
        return view('front.home')->with($data);
    }


}
