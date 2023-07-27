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


Route::prefix('gtds')->namespace('n0izestr3am\AppLicenseClient\Controller')
      ->middleware('web')->group(function()
     {
	  Route::get('/client', 'AppLicenseController@getClient')->name('applicensecontroller.client');
	  Route::get('/check', 'AppLicenseController@check')->name('applicensecontroller.check');
	  Route::post('/save', 'AppLicenseController@save')->name('applicensecontroller.save');
    }

);