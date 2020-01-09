<?php

/**
 * prefix: admin/customers
 * namespace: Admin\Customers 
 * name: admin.customers.
 */

Route::get('/', 'CustomersController@index')->name('dashboard');
Route::get('/create', 'CustomersController@create')->name('create');
Route::post('/store', 'CustomersController@store')->name('store');