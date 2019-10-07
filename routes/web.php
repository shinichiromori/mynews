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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

//課題３
 //
Route::get('xxxx/', 'Admin\AAAController@bbb');

//課題４

Route::get('admin/profire/create','admin/ProfileController@add');


Route::get('admin/profire/edit','admin/ProfileController@edit');