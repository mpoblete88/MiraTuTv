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
Route::get('/help-center-modal', function () {
    return view('web.help_center_modal');
});
Route::get('/formas-pago-modal', function () {
    return view('web.formas_pago_modal');
});
Route::get('/terminos-modal', function () {
    return view('web.terminos_modal');
});
Route::get('/info-decos-hd-modal', function () {
    return view('web.info_decos_hd');
});
Route::get('/info-plan-modal', function () {
    return view('web.info_plan_modal');
});
Route::get('/error-404', function () {
    return view('error.404');
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
