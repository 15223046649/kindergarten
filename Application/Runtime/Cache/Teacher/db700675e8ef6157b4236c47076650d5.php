<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>教师 - 登录</title>
	<link href="/newTeacher/Public/css/teacher.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body class="login">
	<div class="login_box">
		<form method="post">
		<h1>欢迎教师登录</h1>
		<table>
			<tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="verify" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/newTeacher/Teacher/Login/getVerify" onclick="this.src='/newTeacher/Teacher/Login/getVerify/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="登　录" /></td></tr>
		</table>
		</form>
	</div>
</body>
</html>