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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// 模板
Route::get('/nav', 'userController@nav');
Route::get('/copyRight', 'userController@copyRight');
// page
Route::get('/', 'userController@index');
Route::get('/index', 'userController@index');
Route::get('/introduction', 'userController@introduction');
Route::get('/service', 'userController@service');
Route::get('/about', 'userController@about');
Route::get('/contact', 'userController@contact');

// mobil
Route::get('/mabout', 'userController@mabout');
Route::get('/mcontact', 'userController@mcontact');
Route::get('/mindex', 'userController@mindex');
Route::get('/mintroduction', 'userController@mintroduction');
Route::get('/mservice', 'userController@mservice');
Route::get('/mboard', 'userController@mboard');
