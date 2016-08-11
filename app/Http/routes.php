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
    return view('home.homeindex');
});
//隐式控制器
//路由组
//Route::group(['middleware'=>'adminlogin'],function(){
	//后台
	Route::Controller('/admin/','AdminController');
	//后台用户的控制器
	Route::Controller('/admin/user','UserController');
	//后台商品分类
	//Route::Controller('/admin/cate','CateController');
	//商品操作
	//Route::Controller('/admin/goods','GoodsController');
	//商品详情
	//Route::Controller('/goods','GoodsController');
//});
//前台登录和注册页面************准备放路由组里

//后台登录页面************
Route::Controller('/admin/login','LoginController');

//注册页面
Route::get('/register','LoginController@register');
Route::post('/doregister','LoginController@doregister');
//验证码测试，后边改过来
Route::post('/vvcode','LoginController@vvcode');
Route::get('/sendmail','LoginController@sendmail');
/*Route::get('/sendmail',function(){
	return view('email.index');
});*/
Route::get('/jihuo','LoginController@jihuo');

