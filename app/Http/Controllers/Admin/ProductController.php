<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cat;
use Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $data['allproducts']=Product::select()->get();
        return view('admin.products.products')->with($data);
    }

    public function create(){
        $data['cats']=Cat::select('id','name')->get();
        return view('admin.products.create')->with($data);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'sale'=>'required',
            'bestrated'=>'required',
            'bestseller'=>'required',
            'new'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png',
            'cat_id'=>'required'
        ]);
        $new_img_name = $data['image']->hashName();

        //make the image same instance to access it
        Image::make($data['image'])->resize(50,50)->save(public_path('uploads/products/'.$new_img_name));

        $data['image']=$new_img_name;


        Product::create($data);
        return redirect(route('admin.products'));
    }

    public function edit($id){
        $data['prod']= Product::findOrFail($id);

        $data['cats']=Cat::select('id','name')->get();

        return view('admin.products.edit')->with($data);
    }

    public function update(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'sale'=>'required',
            'bestrated'=>'required',
            'bestseller'=>'required',
            'new'=>'required',
            'image'=>'nullable|image|mimes:jpg,jpeg,png',
            'cat_id'=>'required'
        ]);
        $old_img_name = Product::findOrFail($request->id)->image;
        if($request->hasFile('image')){
            Storage::disk('uploads')->delete('/products/'.$old_img_name);
            $new_img_name = $data['image']->hashName();
            //make the image same instance to access it
            Image::make($data['image'])->resize(50,50)->save(public_path('uploads/products/'.$new_img_name));
            $data['image']=$new_img_name;
        }else{
            $data['image']=$old_img_name;
        }
        Product::findOrFail($request->id)->update($data);

        return redirect(route('admin.products'));
    }

    public function delete($id){
        $old_img_name=Product::findOrFail($id)->image;
        Storage::disk('uploads')->delete('/products/'.$old_img_name);

        $data =Product::findOrFail($id)->delete();

        return back();
    }
}
