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


Route::prefix('gtds')->namespace('n0izestr3am\LicenseClient\Controller')
      ->middleware('web')->group(function()
     {
	  Route::get('/client', 'LicenseController@getClient')->name('licensecontroller.client');
	  Route::get('/check', 'LicenseController@check')->name('licensecontroller.check');
	  Route::post('/save', 'LicenseController@save')->name('licensecontroller.save');

    }

);