<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class Profile extends Controller
{
    public function index($id){
        $data['clients']=Client::where('id',$id)->get();
        return view('front.profile')->with($data);
    }
}
