<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>幼儿园管理系统-教师端</title>
	<link href="/newTeacher/Public/css/teacher.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<h1 class="left">幼儿园管理系统教师端</h1>
	<ul class="right">
		<li>欢迎您：<?php echo (session('Teacher_NAME')); ?></li>
		<li>|</li><li><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/newTeacher/index.php/Home/Index/Index/index.html">前台首页</a></li>
		<li>|</li><li><a href="/newTeacher/Teacher/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="/newTeacher/Teacher/Index/index" id="Index_index">首页</a></li>
			<li><a href="/newTeacher/Teacher/Teacher/index" id="Teacher_index">信息管理</a></li>
			<li><a href="/newTeacher/Teacher/Student/index" id="Student_index">学生信息</a></li>
			<li><a href="/newTeacher/Teacher/Tview/add" id="Tview_add">发表意见</a></li>
			<li><a href="/newTeacher/Teacher/Goods/index" id="Notice_index">查看通知</a></li>
			<li><a href="/newTeacher/Teacher/Message/add" id="Message_add">发布通知</a></li>
			<li><a href="/newTeacher/Teacher/Leave/index" id="Leave_index">请假管理</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">个人信息</div>
<div class="title-btn left"><a href="/newTeacher/Teacher/Teacher/update">修改密码</a></div>
<div class="data-list clear">
	<table border="1">
		<tr><td width="60">学号</td>
		<td><?php echo session("Teacher_ID");?></td></tr>
		<tr><td>密码</td>
		<td><?php echo md5(session("Teacher_PWD"));?></td></tr>
		<tr><td>姓名</td>
		<td><?php echo session("Teacher_NAME");?></td></tr>
		<tr><td>班级</td>
		<td><?php echo session("Teacher_CLA");?></td></tr>
	</table>
</div></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>