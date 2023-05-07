<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    //guarded id mean that it is not fillable
    protected $guarded = ['id'];

    //relationship 1 cat to many products
    public function products(){

        return $this->hasMany('App\Models\Product');
    }
}
