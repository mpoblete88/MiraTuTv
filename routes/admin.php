<?php

    Route::get('/', function () {
        return view('admin.index');
    });

    /*
     * COMPANY ROUTES
     */

    Route::resource('company', 'Admin\Catalog\CompanyController');
//    Route::resource('company_branch_office', 'Admin\Catalog\CompanyBranchOfficeController');

    Route::get('company/{company}/branch_office', [

        'uses' => 'Admin\Catalog\CompanyBranchOfficeController@index',
        'as' => 'company_branch_office.index'
    ]);
