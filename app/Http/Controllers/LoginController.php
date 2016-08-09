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
	//后台登录处理
	public function postDologin(Request $request)
	{
		//
		$user=DB::table('user')
			->where('username',$request->input('username'))
			->first();
		if(!empty($user)){
			if(Hash::check($request->input('password'),$user->password)){
				//登录成功
				session(['id'=>$user->id]);
				//跳转页面
			return redirect('/admin')->with('success','欢迎');

			}else{
				return back()->with('error','用户名或密码错误');
			}

		}else{
			return back()->with('error','用户名或密码错误');
		}

	}

	//后台退出

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

	//发送邮件测试
	public function sendmail()
	{
		$id=1;
		$token='0oijnb';
		$email='weiwork0012010@163.com';
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
		Mail::send('email.index', ['id'=>$id,'token'=>$token], function ($message)use($email) {
            $message->to($email)->subject('注册账号激活邮件');
        });
		echo 333;
	}

	//激活
	public function jihuo()
	{
		//echo '欢迎激活';
	}
}