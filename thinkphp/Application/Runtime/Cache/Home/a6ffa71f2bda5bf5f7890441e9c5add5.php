<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>北漂易租后台登陆</title>

	<!--- CSS --->
	<link rel="stylesheet" href="/thinkphp/Public/css/style.css" type="text/css" />


	<!--- Javascript libraries (jQuery and Selectivizr) used for the custom checkbox --->

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="jquery/jquery.js"></script>
		<script type="text/javascript" src="jquery/selectivizr.js"></script>
		<noscript><link rel="stylesheet" href="css/fallback.css" /></noscript>
	<![endif]-->

	</head>

	<body>
		<div id="container">
			<form action="/thinkphp/index.php/Home/Northfloat/index" method="post">
				<div class="login">欢迎回家,请登陆</div>
				<div class="username-text">管理员名称:</div>
				<div class="password-text">管理密码:</div>
				<div class="username-field">
					<input type="text" name="username" value="azmind" />
				</div>
				<div class="password-field">
					<input type="password" name="password" value="azmind" />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">记住我?</label>
				<div class="forgot-usr-pwd">忘记  <a href="#">密码</a>?</div>
				<input type="submit" name="submit" value="GO" />
			</form>
		</div>
	</body>
</html>