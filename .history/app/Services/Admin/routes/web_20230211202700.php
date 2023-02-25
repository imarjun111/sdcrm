<?php

/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin'], function() {

    // The controllers live in src/Services/Admin/Http/Controllers
     Route::get('/', 'AdminController@login');
     Route::post('login', 'AdminController@checklogin')->name('login');
     

    // Route::get('/', function() {
    //     return view('admin::welcome');
    // });

});
