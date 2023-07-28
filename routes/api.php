<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/check','Controller\AppLicenseController@check');
Route::group([
    'middleware' => 'api',
    'namespace' => 'n0izestr3am\LicenseClient\Controller',
    'prefix' => 'gtds'
], function ($router) {
   Route::get('/api', 'LicenseController@apiChek');
   Route::post('/update/{id}', 'LicenseController@update')->name('licensecontroller.update');

});

