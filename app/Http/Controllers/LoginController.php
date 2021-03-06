<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use DB;
use Hash;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
	//后台登录页面
	public function getIndex()
	{
		//解析模板
		return view('admin.login');
	}
	//后台登录处理，
	public function postDologin(Request $request)
	{
		//dd($request->all());//检查用户是否存在
		$user=DB::table('users')
			->where('username',$request->input('username'))
			->first();
		// dd($user);
			//检查用户是否存在
		if(!empty($user)){
			//dd(Hash::check($request->input('password'),$user->password));
			//dd(Hash::check($request->input('password'));报错FatalErrorException in LoginController.php line 32: syntax error, unexpected ';'
			//dd($user->password);
			//检测密码是否一致
			if(Hash::check($request->input('password'),$user->password)){
				//登录成功

				session(['id'=>$user->id]);
				//跳转页面
			return redirect('/admin')->with('success','欢迎'.$user->username.'登录凡客网');

			}else{
				return back()->with('error','用户名或密码错误1');
			}

		}else{
			return back()->with('error','用户名或密码错误2');
		}

	}

	//后台退出,session来做
	public function postLogout(Request $request)
	{
		//dd($request->session()->all());
		$request->session()->flush();
		//退出后，判断执行成功，跳转到后台登录页面/前台登录页面也是未登录状态
		
		return redirect('/admin/login')->with('error','您已退出后台');
      //return back()->with('error','您有未结束的操作，退出登录失败');//进入下一请求
      
	}
	//前台页面的注册显示
	public function register()
	{
		return view('home.register');
	}

	//处理注册操作
	public function doregister(LoginPostRequest $request)
	{
		//dd($request->all());
		//检测验证码是否正确
		if($request->input('vcode')!=session('Vcode'))
		{
			return back()->with('error','验证码不正确');
		}
		//处理数据
		$data=$request->only(['email','password']);
		$data['password']=Hash::make($data['password']);
		$data['token']=str_random(50);//验证用户
		$data['status']=1;
		//dd($data);//有数据
		$id=DB::table('users')->insertGetId($data);
		if($id){
			//注册成功，发送激活邮件
			$this->sendmail($id,$data['token'],$request->input('email'));
			//return view('home.success',["$data['token']"=>$users,"$request->input('email')"=>$email]);
			return view('home.success');

		}else{
			return back()->with('error','注册失败,请联系管理员');
		}




	}

	//验证码
	public function getVcode()
	{
		ob_clean();//清除输出缓存区的内容
	    //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        session(['Vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        
	}
	//失去焦点验证验证码
	public function vvcode(Request $request)
	{
		$verify = $request->input('verify');

		if($verify == session('Vcode')){
			echo "1";
		}else{
			echo "0";
		}
	}

	//发送邮件测试
	public function sendmail($id,$token,$email)
	{
		/*$id=1;
		$token='0oijnb';
		$email='weiwork0012010@163.com';*/
		/*
		//发送原始字符串
		Mail::raw('凡客网欢迎你注册请点击激活....', function ($message) {
        //设置邮件标题
        $message->subject('账户激活邮件');
        //发送给谁
        $message->to('weiwork0012010@163.com');
    });
		//echo 222;
		*/
		//发送模板
		Mail::send('email.index', ['id'=>$id,'token'=>$token,'email'=>$email], function ($message)use($email) {
            $message->to($email)->subject('注册账号激活邮件');
        });
		///echo '欢迎您注册凡客网，您的激活邮件已经发送至您的邮箱，请等待5秒进行跳转，如果5秒后无响应，请点击进行激活。';
	}

	//激活
	public function jihuo(Request $request)
	{
		//echo '欢迎激活';
		//$id=DB::table('users')->insertGetId($id);
		//$token=$request->input('token');
		$id=$request->input('id');

		//$token=DB::table('users')->where('id'=>$id,'token'=>$token)->select($token);
		$user=DB::table('users')->where('id',$id)->first();

		/*if($token==session['token'])
		{

		}else{

		}*/
		//判断
		if($user){
			if($request->input('token') == $user->token)
			{ 
				//修改状态
				$arr = ['status'=>2,'token'=>str_random(50)];
				if(DB::table('users')->where('id',$id)->update($arr)){
					//'祝贺你激活成功！';激活成功后跳转到激活成功页面
					return view('email.successjihuo'); 
				}else{
					echo '哎呦，姿势不对，看看原因';
				}
				

			}else{
				echo '您的链接已经失效';
			}
		}else{
			echo '没有查询到您的信息';
		}

	}

	//前台登录页面
	public function hlogin()
	{
		//解析模板
		return view('home.hlogin');
	}

	//前台登录处理，
	public function dohlogin(Request $request)
	{

		//dd($request->all());//检查用户是否存在
		$user=DB::table('users')
			->where('email',$request->input('email'))
			->first();
		//dd($user);
			//检查用户是否存在
		if(!empty($user)){
			//dd(Hash::check($request->input('password'),$user->password));
			//dd(Hash::check($request->input('password'));报错FatalErrorException in LoginController.php line 32: syntax error, unexpected ';'
			//dd($user->password);
			//检测密码是否一致
			if(Hash::check($request->input('password'),$user->password)){
				//登录成功

				session(['id'=>$user->id]);
				//跳转页面
			return redirect('/')->with('success','欢迎'.$user->email.'登录凡客网');

			}else{
				return back()->with('error','邮箱名或密码错误1');
			}

		}else{
			return back()->with('error','邮箱名或密码错误2');
		}

	}

	//前台找回密码的
	public function yanemail(Request $request)
	{
		//echo 1234;
		return view('home.yanemail');
	}
	//处理操作
	
	public function doyanemail(Request $request)
	{
		if(!empty($data)){
			echo "1";
		}else{
			echo "邮箱不存在";
		}
		/*dd($request->all());
		$verify = $request->email;
		$data=DB::table('users')
			->where('email',$verify)
			->first();*/
		//dd($email);
		

	/*
		
		$data=DB::table('users')->select($verify);

		if($verify == $data){
			echo "1";
		}else{
			echo "0";
		}
		*/
		//$email=$request->input('email');
		
		//dd($request->all());
		/*
		//检测邮箱是否正确
		if($data!)
		{
			return back()->with('error','邮箱名不正确');
		}
		//处理数据
		$data=$request->only(['email','password']);
		$data['password']=Hash::make($data['password']);
		$data['token']=str_random(50);//验证用户
		//dd($data);//有数据
		$id=DB::table('users')->insertGetId($data);
		if($id){
			//注册成功，发送激活邮件
			$this->sendmail($id,$data['token'],$request->input('email'));
			//return view('home.success',["$data['token']"=>$users,"$request->input('email')"=>$email]);
			return view('home.success');

		}else{
			return back()->with('error','没有查询到您的信息');
		}
		*/
		/*
		if($data){
			//邮箱名正确，发送找回密码邮件
			$this->sendmail($id,$data['token'],$request->input('email'));
			return view(home.success2);
		}else{
			return back()->with('error','没有查询到您的信息');
		}

	*/
	}

}