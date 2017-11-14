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
    return view('web.home');
});
Route::get('/plans', function () {
    return view('web.plans');
});
Route::get('/plan/{id}/channels', function () {
    return view('web.channels');
});
Route::get('/plan/{id}/hire', function () {
    return view('web.hire');
});
Route::get('/help-center', function () {
    return view('web.help_center');
});
    Auth::routes();




    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/admin', 'AdminController@index')->name('admin');



    Route::group(['prefix' => 'admin/', 'namespace' => 'Admin'], function(){

        require __DIR__ . '/admin_auth.routes.php';

    });


    Route::group(['prefix' => 'customer/', 'namespace' => 'Customer'], function(){

        require __DIR__ . '/customer_auth.routes.php';

    });
