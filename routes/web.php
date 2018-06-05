<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ad', function () {
    return view('layouts.admin');
});

Route::get('/ad1', function () {
    return view('layouts.adminside');
});

Route::get('/us1', function () {
    return view('layouts.userside');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//put security like in homecontroller to open it for visitor who log in
Route::resource('/home', 'UserHomeController');

Route::group(['middleware'=>'auth'],function (){

    Route::get('/search',function (){
        $product=\App\Products::Where('name','like','%'.request('query').'%')->get();
        return view('user.result',compact('product'));
    });

});


Route::resource('/user/cart','UserCartController');
//admin security
Route::group(['middleware'=>'admin'],function (){

    Route::get('/admin',function (){
       return view('admin.dashboard');
    });

    Route::resource('/admin/user','AdminUserController');
    Route::resource('/admin/product','AdminProductController');
    Route::resource('/admin/category','AdminCategoryController');
    Route::resource('/admin/media','AdminMediaController');

});


