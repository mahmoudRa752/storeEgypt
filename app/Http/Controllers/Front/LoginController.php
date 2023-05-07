<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    public function login(){
        return view('front.login');
    }

    public function dologin(Request $request){
        $data = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!auth()->guard('client')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
            echo "<pre>";
            print_r($data);
        echo "</pre>";
            return 'unsigned unfortionatly';
        }else{
            return 'signed in successfully';
        }
    }

    public function logout(){
        auth()->guard('client')->logout();

        return redirect(route('front.login'));
    }

}
