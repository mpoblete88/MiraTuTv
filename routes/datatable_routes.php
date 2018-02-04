<?php

Route::get('admins', 'Admin\Catalog\AdminController@getDatatable')->name('datatable_admins');
Route::get('users', 'Admin\Catalog\UserController@getDatatable')->name('datatable_users');
Route::get('customers', 'Admin\Catalog\CustomerController@getDatatable')->name('datatable_customers');

Route::get('company-branch-offices', 'Admin\Catalog\CompanyBranchOfficeController@getDatatable')->name('datatable_company_branch_offices');
Route::get('company-branch-offices-phones', 'Admin\Catalog\CompanyBranchOfficePhoneController@getDatatable')->name('datatable_company_branch_office_phones');

Route::get('plans', 'Admin\Catalog\PlanController@getDatatable')->name('datatable_plans');
Route::get('channels', 'Admin\Catalog\ChannelController@getDatatable')->name('datatable_channels');
Route::get('category_channel-channel', 'Admin\Catalog\CategoryController@getDatatable')->name('datatables_category_channel');
Route::get('types-channel-channel', 'Admin\Catalog\TypeController@getDatatable')->name('datatables_type_channel');
Route::get('sliders', 'Admin\Catalog\SliderController@getDatatable')->name('datatables_slider');