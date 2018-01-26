<?php

Route::get('admins', 'Admin\Catalog\AdminController@getDatatable')->name('datatable_admins');
Route::get('users', 'Admin\Catalog\UserController@getDatatable')->name('datatable_users');
Route::get('customers', 'Admin\Catalog\CustomerController@getDatatable')->name('datatable_customers');