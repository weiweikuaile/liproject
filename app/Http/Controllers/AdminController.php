<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    //后台首页
    public function getIndex()
    {
    	//解析模板
    	return view('admin.index');
    }

    /*public function postLogout(Request $request)
	{
		dd($request->session()->all());
		$request->session()->flush();
		//退出后，判断执行成功，跳转到后台登录页面/前台登录页面也是未登录状态
		
		return redirect('/admin/login')->with('error','您已退出登录');
      //return back()->with('error','您有未结束的操作，退出登录失败');//进入下一请求
      
	}*/
}
