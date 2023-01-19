<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API RouteseServiceProvider 
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the Routwithin a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API ROUTES for our application
Route::post('/submit', '\App\Http\Controllers\DataController@save')->name('add-data');
Route::put('/submit/{id}', '\App\Http\Controllers\DataController@save')->name('edit-data');
Route::delete('/delete/{id}', '\App\Http\Controllers\DataController@delete')->name('delete-data');
Route::get('/get', '\App\Http\Controllers\DataController@get')->name('get-data');