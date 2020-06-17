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
			<li><a href="/newTeacher/Teacher/Tview/add" id="Tview_add">发表意见</a></li>
			<li><a href="/newTeacher/Teacher/Goods/index" id="Notice_index">查看通知</a></li>
			<li><a href="/newTeacher/Teacher/Message/add" id="Message_add">发布通知</a></li>
			<li><a href="/newTeacher/Teacher/Leave/index" id="Leave_index">请假管理</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">假条审核</div>
<div class="data-list clear">
<form method="post" action="">
	<table>
	<input type="hidden" name="id" value="<?php echo ($leave["id"]); ?>">
		<tr><td width="100">原因</td>
		<td><?php echo ($leave["reason"]); ?></td></tr>
		<tr><td>请假时间</td>
		<td><?php echo ($leave["timestart"]); ?></td></tr>
		<tr><td>销假时间</td>
		<td><?php echo ($leave["timeend"]); ?></td></tr>
		<tr><td>审核状态</td>
		<td><input type="radio" name="state" id="" value="1">通过&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="state" id="" value="0"> 未通过</td></tr>
		<tr><td>&nbsp;</td><td><input style="width:50px;" type="submit" value="确  定" /></td></tr>
	</table>
	</form>
</div></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>