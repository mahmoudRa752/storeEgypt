<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\Front\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//name use in href forms instead of url('Front\HomeCont....')
Route::get('/','Front\\HomeController@showAll')->name('frontHome');

Route::get('/cat/{id}','CatController@showOneCat')->name('front.onecat');
Route::get('/cats','CatController@index')->name('cats');
Route::get('/products/cat/{id}','CatController@productsUnderCat')->name('productsUnderCat');
Route::get('/productByBrand/{brand}','ProductController@productByBrand')->name('productByBrand');
Route::get('/product/{id}','ProductController@oneProduct')->name('oneProduct');
Route::get('/product/{id}/addtocart','ProductController@addToCart')->name('addProductToCart');
Route::get('/contact','Front\ContactController@index')->name('front.contact');
Route::get('/setting','Front\setting@index')->name('front.setting');
Route::get('/profile/{id}','Front\Profile@index')->name('front.profile');
Route::get('/logout','Front\LoginController@logout')->name('front.logout');

Route::get('/login','Front\LoginController@login')->name('front.login');
Route::post('/dologin','Front\LoginController@dologin')->name('front.dologin');
