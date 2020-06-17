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
		<div class="item"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div class="title">教师首页</div>
<div class="data-list clear">欢迎进入幼儿园管理系统教师端！请从左侧选择一个操作。</div>
</body>
</html></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>