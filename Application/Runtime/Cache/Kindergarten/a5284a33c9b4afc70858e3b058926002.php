<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>园长登录</title>
	<link href="/newTeacher/Public/css/admin.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body class="login">
	<div class="login_box">
	<form method="post">
		<h1>欢迎园长登录</h1>
		<table>
			<tr><th width="80">用户名：</th><td><input class="input" type="text" name="name" /></td></tr>
			<tr><th>密　码：</th><td><input class="input" type="password" name="password" /></td></tr>
			<tr><th>验证码：</th><td><input class="input" type="text" name="verify" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/newTeacher/Kindergarten/User/getVerify" onclick="this.src='/newTeacher/Kindergarten/User/getVerify/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="login_btn" type="submit" value="登录" /></td></tr>
		</table>
	</form>
	</div>
</body>
</html>