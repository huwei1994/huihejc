<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta name="renderer" content="webkit">
	<title></title>
	<link rel="stylesheet" href="<?php echo site_url('assets/css/css/style.css'); ?>" />
	<link rel="stylesheet" href="<?php echo site_url('assets/font-awesome/css/font-awesome.min.css'); ?>" />
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.SuperSlide.2.1.1.js'); ?>"></script>


</head>
<body>
<div id="nav">
	<div class="container">
		<a class="logo" href="index.html"><img src="<?php echo site_url('assets/images/jc3.png'); ?>"/></a>
		<div class="nav-right">
			<p class="tel"><span><img src="images/tel.png"/></span>0755-<strong>8285 6666</strong></p>
			<ul>
				<li><a href="index.html" >首页</a></li>
				<li class="hide">
					<a href="#this">产品展示</a>
					<ul class="dropDown">
						<li><a href="#this">企业介绍</a></li>
						<li><a href="#this">企业文化</a></li>
						<li><a href="#this">企业实力</a></li>
					</ul>
				</li>
				<li><a href="joinUs-about.html">招商加盟</a></li>
				<li><a href="brandcenter.html">品牌中心</a></li>
				<li><a href="latest.html">最新动态</a></li>
				<li><a href="#this">关于我们</a></li>
			</ul>
		</div>

	</div>
</div>

<div id="content">
	<div class="container pos-re">

		<div class="banner">
			<div id="slideBox" class="slideBox">
				<div class="hd">
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
				<div class="bd">
					<ul>
						<li>
							<a href="#this"><img src="images/jc13.png"/></a>
						</li>
						<li>
							<a href="#this"><img src="images/jc13.png"/></a>
						</li>
						<li>
							<a href="#this"><img src="images/jc13.png"/></a>
						</li>

					</ul>
				</div>

				<!--下面是前/后按钮代码，如果不需要删除即可
					<a class="prev" href="javascript:void(0)"></a>
					<a class="next" href="javascript:void(0)"></a>-->

			</div>
			<script>
				jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
			</script>

		</div>

		<div class="item">
			<div class="item01">
				<img src="images/jc4.png"/>
				<div class="imgtxt">
					<a href="#this">
						<h4>汇和集团</h4>
						<p class="lh-20">汇和建材有限公司成立于2011年，注册资本1800万元，集团总部位于香港，并分别在深圳、佛山和荆州等地设立分公司……</p>
					</a>

				</div>
			</div>

			<div class="item02">
				<img src="images/jc5.png"/>
				<div class="imgtxt">
					<h4>产品理念</h4>
					<a class="btnbg" href="#this">6S设计理念</a>
					<a class="btnbg" href="#this">6H品质保障</a>
				</div>
			</div>

			<div class="item03">
				<div class="imgtxt">
					<h4 class="newtit">最新动态 <a class="more" href="#this">+ 更多</a></h4>
					<ul class="newList">
						<li><span class="dot"></span><a  class="text-overflow" href="#this">中节能和中建材受惠两会材受惠两会 ”——</a></li>
						<li><span class="dot"></span><a class="text-overflow" href="#this">中节能和中建材受惠两会”——</a></li>
						<li><span class="dot"></span><a class="text-overflow" href="#this">中节能和中建材受惠两会”——</a></li>
					</ul>

				</div>
			</div>
		</div>

	</div>



</div>

<div id="footer">
	<div class="container">
		<div class="footer_menu">
			<ul>
				<li><a href="index.html">首页</a></li>
				<li><a href="brandcenter-contactus.html">联系我们</a></li>
				<li><a href="#this">DIY设计</a></li>
				<li><a href="#this">常见问题</a></li>
				<li><a href="#this">售后服务</a></li>
			</ul>
			<p>汇和建材版权所有 2011-2015 &copy 鄂ICP备16016680号-1</p>
			<img  class="footer-ewm" src="images/ewm.png"/>
		</div>

	</div>


</div>
</body>
</html>
