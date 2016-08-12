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
//首页
Route::get('/', function () {
    return view('home.homeindex');
});
//隐式控制器
//路由组
Route::group(['middleware'=>'adminlogin'],function(){
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
});

//后台登录页面&后台退出************
Route::Controller('/admin/login','LoginController');


//前台注册页面
Route::get('/register','LoginController@register');
Route::post('/doregister','LoginController@doregister');
//前台注册页面的验证码测试，
Route::post('/vvcode','LoginController@vvcode');
Route::get('/sendmail','LoginController@sendmail');
/*Route::get('/sendmail',function(){
	return view('email.index');
});*/
////前台注册后激活邮箱
Route::get('/jihuo','LoginController@jihuo');

//前台登录
Route::get('/hlogin','LoginController@hlogin');
Route::post('/dohlogin','LoginController@dohlogin');

//前台登录的找回密码
Route::get('/yanemail','LoginController@yanemail');
Route::post('/doyanemail','LoginController@doyanemail');

Route::get('/findpwd','LoginController@findpwd');
Route::post('/dofindpwd','LoginController@dofindpwd');



