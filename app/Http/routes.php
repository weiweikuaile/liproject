<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
//隐式控制器
//后台
Route::Controller('/admin/','AdminController');
//后台用户的控制器
Route::Controller('/admin/user','UserController');

