<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function index(){
        $data['cats']=Cat::select()->get();

        return view('admin.category.cats')->with($data);
    }

    public function edit($id){

        $data['cat']=Cat::findOrFail($id);

        return view('admin.category.edit')->with($data);
    }

    public function update(Request $request){

        $data = $request->validate([
            'name'=>'required',
            'desc'=>'required',
        ]);
        Cat::findOrFail($request->id)->update($data);

        return redirect(route('admin.cats'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'required'
        ]);

        Cat::create($data);

        return redirect(route('admin.cats') );
    }

    public function delete($id){
        $data =Cat::select()->where('id',$id);
        $data->delete();

        return redirect(route('admin.cats'));
    }
}
