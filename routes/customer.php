<?php

    Route::get('/', function () {
        return view('customer.index');
    });


    Route::resource('customers', 'Customer\Catalog\CustomerController');
