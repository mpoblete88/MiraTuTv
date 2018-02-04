<?php

Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');

/*
 * COMPANY ROUTES
 */


Route::resource('company', 'Admin\Catalog\CompanyController');
Route::resource('channel', 'Admin\Catalog\ChannelController');
Route::resource('plan', 'Admin\Catalog\PlanController');
Route::resource('types_channel', 'Admin\Catalog\TypeController');
Route::resource('category_channel', 'Admin\Catalog\CategoryController');
Route::resource('sliders', 'Admin\Catalog\SliderController');
Route::resource('users', 'Admin\Catalog\UserController');
Route::resource('app_customers', 'Admin\Catalog\CustomerController');
Route::resource('app_admins', 'Admin\Catalog\AdminController');
Route::resource('system_maintenance', 'Admin\Catalog\systemMaintenanceController');
Route::resource('company_branch_office', 'Admin\Catalog\CompanyBranchOfficeController');
Route::resource('company_branch_office_phones', 'Admin\Catalog\CompanyBranchOfficePhoneController');
Route::resource('company_branch_office_contacts', 'Admin\Catalog\CompanyBranchOfficeContactController');