<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $data['Clients']=Client::select()->get();

        return view('admin.Clients.Clients')->with($data);
    }

    public function create(){
        return view('admin.clients.create');
    }

    public function store(Request $request){

        $data=$request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required'
        ]);

        Client::create($data);
        return redirect(route('admin.clients'));

    }

    public function edit($id){
        $data['client'] = Client::findOrFail($id);
        echo "well done";
        return view('admin.clients.edit')->with($data);
    }

    public function update(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required',
        ]);

        Client::findOrFail($request->id)->update($data);

        return redirect(route('admin.clients'));
    }

    public function delete($id){
        $data = Client::select()->where('id',$id);
        $data->delete();
        return back();
    }

    // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
}
