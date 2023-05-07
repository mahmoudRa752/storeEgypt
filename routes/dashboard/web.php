<?php



Route::prefix('dashboard')->name('admin.')->group(function(){

    Route::get('/login','AuthController@login')->name('login');
    Route::post('/dologin','AuthController@dologin')->name('dologin');

    //adminAuth the name of middleware in kernel and admin is the name of guard
    Route::middleware('adminAuth:admin')->group(function(){
        Route::get('/','Dashboard@index')->name('index');
        Route::get('/logout','AuthController@logout')->name('logout');
        Route::get('/cats','CatController@index')->name('cats');

        Route::prefix('/admins')->name('admin.')->group(function(){

            Route::get('/allAdmins','Dashboard@adminsTable')->name('adminsTable');
            Route::get('/create','Dashboard@create')->name('create');
            Route::post('/store','Dashboard@store')->name('store');
            Route::get('/edit/{id}','Dashboard@edit')->name('edit');
            Route::post('/update','Dashboard@update')->name('update');
            Route::get('/delete/{id}','Dashboard@delete')->name('delete');
        });

        Route::prefix('category')->name('cat.')->group(function(){

            Route::get('/cat/create','CatController@create')->name('create');
            Route::post('/cat/store','CatController@store')->name('store');
            Route::get('/cat/edit/{id}','CatController@edit')->name('edit');
            Route::post('/cat/update','CatController@update')->name('update');
            Route::get('/cat/delete/{id}','CatController@delete')->name('delete');
        });

        Route::get('/clients','ClientController@index')->name('clients');
        Route::prefix('client')->name('client.')->group(function(){

            Route::get('/create','ClientController@create')->name('create');
            Route::post('/store','ClientController@store')->name('store');
            Route::get('/edit/{id}','ClientController@edit')->name('edit');
            Route::post('/update','ClientController@update')->name('update');
            Route::get('/delete/{id}','ClientController@delete')->name('delete');
        });

        Route::get('/products','ProductController@index')->name('products');
        Route::prefix('product')->name('product.')->group(function(){

            Route::get('/create','ProductController@create')->name('create');
            Route::post('/store','ProductController@store')->name('store');
            Route::get('/edit/{id}','ProductController@edit')->name('edit');
            Route::post('/update','ProductController@update')->name('update');
            Route::get('/delete/{id}','ProductController@delete')->name('delete');
        });

    });

});
