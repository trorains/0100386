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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/particularfees', 'FeesController@index');
Route::post('/studentfees', 'FeesController@newFees');
Route::get('/studentfees/allpayements', 'FeesController@allStudentFees');
Route::get('/studentfees/{studentemail}', 'FeesController@particularStudentFees');