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

//Routes for our application
Route::post('/submit', '\App\Http\Controllers\DataController@save')->name('add-data'); // to save new data
Route::put('/submit/{id}', '\App\Http\Controllers\DataController@save')->name('edit-data'); // to modify extisting data
Route::delete('/delete/{id}', '\App\Http\Controllers\DataController@delete')->name('delete-data'); //to delete a particular row
Route::get('/get', '\App\Http\Controllers\DataController@get')->name('get-data'); // get all the data