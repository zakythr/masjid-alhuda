<?php

Route::get('home', 'Admin\HomeController@index');
Route::get('homezakat', 'Admin\HomezakatController@index');
Route::get('homefidiyah', 'Admin\HomefidiyahController@index');
Route::get('homezakatmal', 'Admin\HomezakatmalController@index');

Route::post('citizens/filter', 'Admin\CitizensController@filter')->name('citizens.filter');
Route::get('citizens/data', 'Admin\CitizensController@data')->name('citizens.data');
Route::resource('citizens', 'Admin\CitizensController');
Route::post('zakatfitrah/filter', 'Admin\ZakatfitrahController@filter')->name('zakatfitrah.filter');
Route::get('zakatfitrah/data', 'Admin\ZakatfitrahController@data')->name('zakatfitrah.data');
Route::resource('zakatfitrah', 'Admin\ZakatfitrahController');
Route::post('zakatmal/filter', 'Admin\ZakatmalController@filter')->name('zakatmal.filter');
Route::get('zakatmal/data', 'Admin\ZakatmalController@data')->name('zakatmal.data');
Route::resource('zakatmal', 'Admin\ZakatmalController');
Route::post('fidiyah/filter', 'Admin\FidiyahController@filter')->name('fidiyah.filter');
Route::get('fidiyah/data', 'Admin\FidiyahController@data')->name('fidiyah.data');
Route::resource('fidiyah', 'Admin\FidiyahController');

Route::get('customers/data', 'Admin\CustomersController@data')->name('customers.data');
Route::resource('customers', 'Admin\CustomersController');
// Route::get('packages', 'Admin\PackagesController@index');
