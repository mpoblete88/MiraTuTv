<?php

Route::get('admins', 'Admin\Catalog\AdminController@getDatatable')->name('datatable_admins');
Route::get('users', 'Admin\Catalog\UserController@getDatatable')->name('datatable_users');
Route::get('customers', 'Admin\Catalog\CustomerController@getDatatable')->name('datatable_customers');
Route::get('company_branch_offices', 'Admin\Catalog\CompanyBranchOfficeController@getDatatable')->name('datatable_company_branch_offices');