<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="./dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./dist/css/bootstrap-theme.min.css">
	<script src="./dist/js/jquery-1.11.3.min.js"></script>
	<script src="./dist/js/bootstrap.min.js"></script>
	<style>
		#zonglei{height:50px;margin-bottom:15px;}
		.fenlei{float:left;width:25%;text-align:center;}
		.fenlei1{margin-top:30px;font-size:25px;}
		.fenlei2{position: absolute;display:none;z-index:1;background:white;width:30%;}
		li{overflow:hidden;}
		.fenlei2 div:hover{background:red;}
	</style>
</head>
<body style="padding:50px 0;">
	          

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
		    	<!-- <img src="logo1.png" style="float:left"> -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav" style="float:right">
		    	<li><a href="">您好欢迎光临凡客诚品!</a></li>
		    	<li><a href="{{url('/hlogin')}}">登录</a></li>
		    	<li><a href="">|</a></li>
		    	<li><a href="{{url('/register')}}">注册</a></li>
		    	<li><a href="">我的订单</a></li>
		    	<li><a href=""><span style="color:#d9534f" class="glyphicon glyphicon-shopping-cart" id="span3">我的购物车</span></a></li>
		    </ul>
		</div>
	</nav>
	
	<nav style="background:gray;height:100px;" class="navbar navbar-default" role="navigation">
	   	<div class="row">
	   	<div id="zonglei" class="col-md-8 col-md-offset-2">
	   		<div class="fenlei">
	   			<div class="fenlei1">男装</div>
	   			<div class="fenlei2">
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   			</div>
	   		</div>
	   		<div class="fenlei">
	   			<div class="fenlei1">男装</div>
	   			<div class="fenlei2">
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   			</div>
	   		</div>
	   		<div class="fenlei">
	   			<div class="fenlei1">男装</div>
	   			<div class="fenlei2">
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   			</div>
	   		</div>
	   		<div class="fenlei">
	   			<div class="fenlei1">男装</div>
	   			<div class="fenlei2">
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   				<div><a href="">啊啊啊啊啊啊啊</a></div>
	   			</div>
	   		</div>
	   	</div>
	   	</div>
	</nav>

	<script type="text/javascript">
		$('.fenlei1').hover(function(){
			$(this).siblings().css({display:'block'});
		},function(){
			$(this).siblings().css({display:'none'});
		})
		$('.fenlei2').hover(function(){
			$(this).css({display:'block'});
		},function(){
			$(this).css({display:'none'});
		})
	</script>

	<div style="width:;margin:0 auto">
	<div class="row">
		<div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          	<ol class="carousel-indicators">
          	 	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
         	  	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
         	  	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
         	  	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
        	</ol>
         	<div class="carousel-inner" role="listbox">
          		<div class="item active">
          		   	<img src="./dist/img/1-1.jpg" alt="...">
         	    	<div class="carousel-caption">1
        	    	</div>
            	</div>
            	<div class="item">
             		<img src="./dist/img/1-2.jpg" alt="...">
              		<div class="carousel-caption">2
              		</div>
            	</div>
             		<div class="item">
              		<img src="./dist/img/1-3.jpg" alt="...">
              		<div class="carousel-caption">3
              		</div>
            	</div>
             		<div class="item">
              		<img src="./dist/img/1-4.jpg" alt="...">
              		<div class="carousel-caption">4
              		</div>
            	</div>
             	<div class="item">
              		<img src="./dist/img/1-5.jpg" alt="...">
              		<div class="carousel-caption">5
              		</div>
            	</div>
          	</div>
          	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            	<span class="sr-only">Previous</span>
          	</a>
         	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            	<span class="sr-only">Next</span>
          	</a>
        </div>
     	</div>
	</div><br><hr>

	<div class="row">
		
		<div class="col-md-6">
			<div class="thumbnail">
			  	<img src="./dist/img/1-1.jpg" alt="...">
			  	<div class="caption">
			    	<h4>充气的,屌丝专供</h4>
			    	<p>99.8元</p>
			    	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
			  	<img src="./dist/img/1-1.jpg" alt="...">
			  	<div class="caption">
			    	<h4>充气的,屌丝专供</h4>
			    	<p>99.8元</p>
			    	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
			  	<img src="./dist/img/1-1.jpg" alt="...">
			  	<div class="caption">
			    	<h4>充气的,屌丝专供</h4>
			    	<p>99.8元</p>
			    	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  	</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
			  	<img src="./dist/img/1-1.jpg" alt="...">
			  	<div class="caption">
			    	<h4>充气的,屌丝专供</h4>
			    	<p>99.8元</p>
			    	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  	</div>
			</div>
		</div>
	</div><hr>

	<div class="row">
	    <div class="col-md-3">
	        <div class="thumbnail">
	          	<img src="./dist/img/1-1.jpg" alt="...">
	          	<div class="caption">
	            	<h4>充气的,屌丝专供</h4>
	            	<p>99.8元</p>
	            	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	          	</div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="thumbnail">
	        <img src="./dist/img/1-2.jpg" alt="...">
	        <div class="caption">
	        	<h4>充气的,屌丝专供</h4>
	        	<p>99.8元</p>
	        	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	        </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="thumbnail">
	          	<img src="./dist/img/1-3.jpg" alt="...">
	          	<div class="caption">
	            	<h4>充气的,屌丝专供</h4>
	            	<p>99.8元</p>
	            	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	          	</div>
	        </div>
	    </div>
       <div class="col-md-3">
        <div class="thumbnail">
          <img src="./dist/img/1-4.jpg" alt="...">
          <div class="caption">
            <h4>充气的,屌丝专供</h4>
            <p>99.8元</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
      	<div class="col-md-3">
	        <div class="thumbnail">
	          	<img src="./dist/img/1-1.jpg" alt="...">
	          	<div class="caption">
	            	<h4>充气的,屌丝专供</h4>
	            	<p>99.8元</p>
	            	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	          	</div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="thumbnail">
	        <img src="./dist/img/1-2.jpg" alt="...">
	        <div class="caption">
	        	<h4>充气的,屌丝专供</h4>
	        	<p>99.8元</p>
	        	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	        </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="thumbnail">
	          	<img src="./dist/img/1-3.jpg" alt="...">
	          	<div class="caption">
	            	<h4>充气的,屌丝专供</h4>
	            	<p>99.8元</p>
	            	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	          	</div>
	        </div>
	    </div>
       <div class="col-md-3">
        <div class="thumbnail">
          <img src="./dist/img/1-4.jpg" alt="...">
          <div class="caption">
            <h4>充气的,屌丝专供</h4>
            <p>99.8元</p>
            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
          </div>
        </div>
      </div>
	</div><hr>
	<div class="jumbotron" style="text-align:center;color:red;background:#f369;border-radius:20px">
		  <h1>丨 京 东 丨 好 快 省 丨</h1>
		  <p></p>
	</div><hr>
	</div>
	<footer class="footer ">
	  <!-- <div class="container">
	    <div class="row footer-top">
	      <div class="col-sm-6 col-lg-6">
	        <h4>
	          <img src="http://static.bootcss.com/www/assets/img/logo.png">
	        </h4>
	        <p>本网站所列开源项目的中文版文档全部由<a href="http://www.bootcss.com/">Bootstrap中文网</a>成员翻译整理，并全部遵循 <a target="_blank" href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>协议发布。</p>
	      </div>
	      <div class="col-sm-6  col-lg-5 col-lg-offset-1">
	        <div class="row about">
	          <div class="col-xs-3">
	            <h4>关于</h4>
	            <ul class="list-unstyled">
	              <li><a href="/about/">关于我们</a></li>
	              <li><a href="/ad/">广告合作</a></li>
	              <li><a href="/links/">友情链接</a></li>
	              <li><a href="/hr/">招聘</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>联系方式</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" title="Bootstrap中文网官方微博" href="http://weibo.com/bootcss">新浪微博</a></li>
	              <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>旗下网站</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" href="http://www.golaravel.com/">Laravel中文网</a></li>
	              <li><a target="_blank" href="http://www.ghostchina.com/">Ghost中国</a></li>
	            </ul>
	          </div>
	          <div class="col-xs-3">
	            <h4>赞助商</h4>
	            <ul class="list-unstyled">
	              <li><a target="_blank" href="http://www.ucloud.cn/">UCloud</a></li>
	              <li><a target="_blank" href="https://www.upyun.com">又拍云</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
	    <hr>
	    <div class="row footer-bottom">
	      <ul class="list-inline text-center">
	        <li><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP备11008151号</a></li><li>京公网安备11010802014853</li>
	      </ul>
	    </div>
	  </div> -->
	</footer>
</body>
</html>