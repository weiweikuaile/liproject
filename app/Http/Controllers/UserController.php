<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
    *后台用户添加
    */
    public function getAdd()
    {
    	//显示添加页面
    	//echo '222';
    	return view('user.add');
    }
    /**
    *处理表单提交添加数据
    */
    public function postInsert(Request $request)
    {
    	//查看所有的提交的数据
    	//dd($request->all());
    	//手动检查用户名不能为空
    	/*if(!$request->input('username')){
    		return back()->with('error','用户名不能为空');
    	//with向session中闪存错误信息$_SESSION['error']='...'
    	//但是不仅要检查错误，还要检查信息是否符合规则，代码太多了。
    	//所以用laravel中内置的表单验证
    	}*/
    	//所以用laravel中内置的表单验证
    	/*$this->$validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);*/
		$this->validate($request,[
			'username' => 'required|regex:/\w{6,18}/',
            'password' => 'required|regex:/\w{6,18}/',
            'repassword' => 'required|same:password',
            'email' => 'required|email',
            'phone' => 'required|regex:/1[3-8]\d{9}/',
            ],[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名需要6-18位字母数字下划线',
            'password.required'=>'密码不能为空',
            'password.regex' => '密码需要6-18位字母数字下划线',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次密码不一致',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'phone.required' => '手机号不能为空',
            'phone.regex' => '手机号格式不正确',
            ]);
    	//当前对象->要调用的方法($request是当前的请求对象，数组字段名=>验证规则)
    	//提取其他数据
    	$data=$request->only(['username','password','email','phone']);
    	//dd($data);
    	//密码用手册上的哈希加密形式，或第二行老师的写法，效果一样。
    	//$data['password']=Hash::make($request->$data['password']);
    	$data['password']=Hash::make($data['password']);
    	//报错:多写了括号
    	//syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$'
    	//随机token
    	$data['token']=str_random(50);
    	//状态为1，为激活
    	$data['status']=1;
    	//处理图片上传
    	$data['pic']=$this->upload($request);
    	//dd($data);
    	//数据插入
    	$res=DB::table('users')->insert($data);
    	if($res){
    		return redirect('/admin/user/index')->with('success','数据添加成功');
    	}else{
    		return back()->with('error','数据添加失败');
    	}
    	
    }
    /**
    *用户列表
    */
    public function getIndex(Request $request)
    {
    	//查询所有数据
    	//$users=DB::table('users')->get();
    	//dd($request->all());
    	//获取分页大小
    	$num=$request->input('num',10);
    	/*
    	//使用分页
    	//$users=DB::table('users')->paginate($num);
    	*/
    	//dd($users);
    	//两种方法
    	//方法一：
    	/*
    	//判断keywords如果没有输入，或者第一次打开添加页面。
    	if($request->input('keywords')){
    		//查询数据库，使用分页
    		$users=DB::table('users')->where('username','like','%'.$request->input('keywords').'%')->paginate($num);
    	}else{
    		$users=DB::table('users')->paginate($num);
    	}
		*/
		//方法二：
		//在laravel的高级where条件,闭包中的$query代表当前数据库对象。
		
		$users=DB::table('users')->where(function($query) use($request){
			//判断是否有where条件
			if($request->input('keywords')){
				$query->where('username','like','%'.$request->input('keywords').'%');
			};
		})->paginate($num);
		
    	//解析模板
    	return view('user.index',['users'=>$users]);
    }

    /**
    *图片上传操作
    */
    public function upload(Request $request)
    {
    	//检测是否有文件上传
    	//dd($request->all());
    	if($request->hasFile('pic')){
    		//文件名称
    		$name=md5(time()+rand(11111,8999999));
    		//文件后缀名获取
    		$suffix=$request->file('pic')->getClientOriginalExtension();
    		$arr=['jpg','jpeg','png','gif'];
    		//判断文件上传类型
    		if(!in_array($suffix,$arr)){
    			echo '上传文件不符合要求';die;
    		}

    		//将指定文件移到到指定位置
    		$request->file('pic')->move('./uploads/',$name.'.'.$suffix);
    	//将文件路径及文件名称返回

    		return '/uploads/'.$name.'.'.$suffix;
    	}else{
    		return '/uploads/default.jpg';
    	}
    	
    }
}
