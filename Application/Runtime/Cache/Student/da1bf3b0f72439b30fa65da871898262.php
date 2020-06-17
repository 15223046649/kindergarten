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
		<div class="item"><div class="title">请假-页面</div>
<div class="title-btn left"><a href="/newTeacher/Student/Leave/look">查看审核状态</a> <br/><a href="/newTeacher/Student/Leave/delete">删除请假记录</a></div><br/>
<div class="data-edit clear">
 <form method="post" action="/newTeacher/Student/Leave/index">
	<table width="300">
  <!--  <tr><td>ID
    <input type="text" name="id"></td></tr> -->
       <tr><td>请假时间 <input name="timestart"  type="datetime-local"/> 至
       &nbsp;&nbsp;&nbsp;<input name="timeend"  type="datetime-local"/></td></tr>
	   <tr><td><textarea name="reason" style="width:300px;height:200px;">请输入请假原因!!!!!!</textarea></td></tr>
		<tr class="tr_btn center"><td colspan="2"><input type="submit" value="确定" />&nbsp;
		<input type="reset" value="重置" /></td></tr>
	 </table>
	 </form>
</div> </div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>