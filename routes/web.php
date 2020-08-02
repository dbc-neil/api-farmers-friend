<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::auth(['verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('apitokens', 'ApiTokens\ApiTokensController@index')->name('apitokens.index');
Route::post('apitokens', 'ApiTokens\ApiTokensController@store')->name('apitokens.store');


Route::apiResource('api/v1/categories', 'Api\V1\CategoriesController');
Route::apiResource('api/v1/{category}/listings', 'Api\V1\ListingsController');
