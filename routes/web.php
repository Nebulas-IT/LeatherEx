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

Route::get('/', 'User\HomeController@index')->name('root');

Route::group(['as' => 'user.', /*'prefix' => 'admin',*/ 'namespace' => 'User',], function () {

    Route::get('/about', function (){
        return view('frontend.about.index');
    })->name('about.index');

    Route::get('/contact', function (){
        return view('frontend.contact.index');
    })->name('contact.index');
    Route::resource('/shop', 'ShopController');
//    Route::get('/shop', 'ShopController@index');
//    Route::get('/shop/{cat}', 'ShopController@show');
    Route::resource('/product', 'ProductController');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', /*'middleware' => ['auth:admin','role:salesman']*/], function () {
    Route::resource('/home-image', 'HomeImageController');
    Route::resource('/product', 'ProductController');
    Route::resource('/cat', 'CategoryController');
    Route::resource('/sub-cat', 'SubCategoryController');
    Route::resource('/brand', 'BrandController');
    Route::get('/', function (){
        return view('backend.dashboard.index');
    })->name('index');
});



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});