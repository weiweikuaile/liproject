<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>新用户注册</title>
        <link rel="stylesheet" href="dist/css/register.css">
</head>
<body>
    <div class="passport-page yoho-page clearfix">
        <div class="passport-cover">
            <div class="cover-content">
                <img class="cover-img" src="./dist/img/555.jpg">
            </div>
        </div>        
        <div class="content">
        <div class="register-page">
            <ul>
                <li class="clearfix" data-index="0">
                    <span id="country-code" class="country-code">+86</span>
                    <input value="" id="phone-num" class="input va phone-num" type="text" name="phoneNum" placeholder="请输入手机号码" autocomplete="off">
                </li>
                <li class="w330 clearfix" data-index="1">
                    <input id="captcha" class="input va captcha" type="text" name="captcha" placeholder="图形验证码" autocomplete="off" maxlength="4">
                    <img id="captcha-img" class="captcha-img" src="other/imagesNode?t&#x3D;1470136130248" alt="">
                    <a class="link change-captcha">换一张</a>
                </li>
                <li class="clearfix" data-index="2">
                    <input id="msg-captcha" class="input va msg-captcha" type="text" name="msgCaptcha" placeholder="短信验证码" autocomplete="off" maxlength="4">
                    <input id="send-captcha" class="btn send-captcha disable" type="button" value="获取短信验证码">
                    <span id="msg-tip" class="hide msg-tip">短信验证码已发送至您的手机，请查收</span>
                </li>
                <li class="clearfix" data-index="3">
                    <input id="pwd" class="input va pwd" name="pwd" placeholder="设置密码" autocomplete="off" maxlength="20" type="password">
                    
                    <div id="pwd-tips" class="hide pwd-tips">
                        <div class="default" id="pwd-tip1"><i></i>密码只支持6-20位字符</div>
                        <div class="default" id="pwd-tip2"><i></i>由字母、 数字组合，不能包含特殊符号</div>
                    </div>
                </li>
                <li class=" clearfix">
                    <input id="agree-terms" class="agree-terms" type="checkbox" checked="">
                    <span>
                        我已阅读并同意遵守
                       
                    </span>
                </li>
                <li class="clearfix">
                    <input name="refer" id="refer" type="hidden" value="">
                    <input id="register-btn" class="btn register-btn disable" type="submit" value="立即注册" disabled="">
                </li>
                
            </ul>
            <input name="" type="hidden" id="open-id" value=""/>
            <input name="" type="hidden" id="source-type" value=""/>
        </div>
        </div>
    </div>

    <script>
    var _hmt = _hmt || [];
    var _gaq = _gaq || [];
    (function() {
        function async_load(){
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-W958MG');
            (function() {
                _gaq.push(['_setAccount', 'UA-48997038-32']);
                _gaq.push(['_trackPageview']);
                var ga = document.createElement('script'); 
                ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        }
        if (window.addEventListener) {
            window.addEventListener('load', async_load, false);
        } else if (window.attachEvent) {
           window.attachEvent('onload', async_load);
        }
    })();
    </script>
    <script>
        window._py = window._py||[];
        window._py.push(['a', 'MC..o8vMMWxEXDCiqYckD81lUX']);
        window._py.push(['domain','stats.ipinyou.com']);
        window._py.push(['e','']);
        if(typeof _goodsData!='undefined'){
            window._py.push(['pi',_goodsData]);
        }
        -function(d){
            var f = 'https:' == d.location.protocol;var c = d.createElement('script');c.type='text/javascript';c.async=1;
            c.src=(f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/t/adv.js';
            var h = d.getElementsByTagName("script")[0];h.parentNode.insertBefore(c, h);
        }(document);
    </script>    
</body>
</html>

