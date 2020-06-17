<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>安和幼儿园管理系统-家长端</title>
	<link href="/newTeacher/Public/css/student.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<h1 class="left">幼儿园管理系统  家长端</h1>
	<ul class="right">
		<li>欢迎您：<?php echo (session('Student_NAME')); ?></li>
		<li>|</li><li><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/newTeacher/index.php/Index/Index/index.html">家长端-首页</a></li>
		<li>|</li><li><a href="/newTeacher/Student/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="/newTeacher/Student/Index/index" id="Index_index">首页</a></li>
		    <li><a href="/newTeacher/Student/Information/update" id="Goods_add">信息修改</a></li>
			<li><a href="/newTeacher/Student/Message/index" id="Goods_index">查看通知</a></li>
			<li><a href="/newTeacher/Student/Message/index" id="Goods_index" style="font-size:12px;">教师通知</a></li>
			<li><a href="/newTeacher/Student/Snotice/index" id="Goods_index" style="font-size:12px;">园长通知</a></li>
			<li><a href="/newTeacher/Student/Sview/index" id="Suggest_add">发表意见</a></li>
			<li><a href="/newTeacher/Student/Leave/index" id="Leave_index">申请请假</a></li>
			
			
			
		</ul>
	</div>
	<div id="content">
		<div class="item"> <html>
<head>
	<meta charset="UTF-8">
	<title>家长端 - 修改密码</title>
	<link href="/newTeacher/Public/css/student.css" rel="stylesheet" />
	<script src="/newTeacher/Public/js/jquery.min.js"></script>
</head>
<body class="login">
	<div class="login_box">
<form method ="post" class ="form-horizo​​ntal" action =" ">
<table border="0" align="center">
 <tr><td>姓名</td><td><input type="text" name="name"></td></tr>
 <tr><td>ID</td><td><input type="text" name="id"></td></tr>
 <tr><td>密码改为</td><td><input type="password" name="pwd"></td></tr>
 <tr><td><button type="submit" value="提交">提交</button></td></tr>
 </table>
 </form>
 </div></body></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>