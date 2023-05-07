<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cat;
use App\Models\Product;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('inc.header',function($view){
            $data['cats']=Cat::select('id','name')->get();
            $data['brands']=Product::select('brand','cat_id')->get();
            // foreach($cats as $cat){
            //     $data['brands']=Product::select('brand')->where('cat_id',$cat->id)->get();
            // }
            $view->with($data);
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
