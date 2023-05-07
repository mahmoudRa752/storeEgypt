<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = [

    ];

    //relationship between many products to 1 cat
    public function category(){

        return $this->belongsTo('App\Models\Cat');
    }

    //relationship between many products to many clients
    public function client(){
        return $this->belongToMany('App\Models\Client');
    }

}
