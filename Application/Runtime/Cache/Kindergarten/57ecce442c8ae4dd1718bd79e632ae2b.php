<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>园长</title>
	<link href="/newTeacher/Public/css/admin.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<h1 class="left">欢迎园长</h1>
	<ul class="right">
		<li>|</li><li><a href="/newTeacher/Kindergarten/User/login">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul>
		    <li><a href="/newTeacher/Kindergarten/Index/index" id="Index_index">园长首页</a></li>
		    <li><a href="/newTeacher/Kindergarten/Kindergarten/index" id="Kindergarten_index">园长个人信息</a></li>
			<li><a href="/newTeacher/Kindergarten/Goods/add" id="Goods_add">发表教职工通知</a></li>
			<li><a href="/newTeacher/Kindergarten/Goods/index" id="Goods_index">教职工通知列表</a></li>
			<li><a href="/newTeacher/Kindergarten/Snotice/add" id="Snotice_add">发表家长通知</a></li>
			<li><a href="/newTeacher/Kindergarten/Snotice/index" id="Snotice_index">家长通知列表</a></li>
			<li><a href="/newTeacher/Kindergarten/Teacher/add" id="Teacher_add">教职工信息添加</a></li>
			<li><a href="/newTeacher/Kindergarten/Teacher/index" id="Teacher_index">教职工列表</a></li>
			<li><a href="/newTeacher/Kindergarten/Student/add" id="Student_add">学生信息添加</a></li>
			<li><a href="/newTeacher/Kindergarten/Student/index" id="Student_index">学生列表</a></li>
			<li><a href="/newTeacher/Kindergarten/Tview/index" id="Tview_index">教职工意见表</a></li>
			<li><a href="/newTeacher/Kindergarten/Sview/index" id="Sview_index">家长意见表</a></li>
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
<div class="title">园长首页</div>
<div class="data-list clear">欢迎进入传智商城后台！请从左侧选择一个操作。</div>
</body>
</html></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>