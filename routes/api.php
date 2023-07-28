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
    'namespace' => 'n0izestr3am\AppLicenseClient\Controller',
    'prefix' => 'gtds'
], function ($router) {
   Route::get('/api', 'AppLicenseController@apiChek');
   Route::post('/update/{id}', 'AppLicenseController@update')->name('applicensecontroller.update');

});

