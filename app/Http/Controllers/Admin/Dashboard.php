<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Dashboard extends Controller
{
    public function index(){
        $data['users'] = User::all();
        return view('admin.dashboard')->with($data);
    }

    public function adminsTable(){
        $data['users'] = User::all();
        return view('admin.admins.adminsTable')->with($data);

    }

    public function create(){
        return view('admin.admins.create');
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $data = $request->except(['password','password_confirmation','permissions']);
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);


        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);

        session()->flash('message', 'New Admin Added Successfully','5s');
        session()->flash('alert-class', 'alert-success');

        return redirect()->route('admin.admin.adminsTable');
    }

    public function edit($id){

    }

    public function update(){

    }

    public function delete($id){

    }
}
