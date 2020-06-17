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
		<div class="item"><div class="title">假条审核</div>
<div class="data-list clear">
	<table border="1">
		<tr><th width="100">请假理由</th><th width="80">请假时间</th><th width="80">销假时间</th><th width="50">审核状态</th><th width="50">操作</th></tr>
		<?php if(is_array($leave["list"])): foreach($leave["list"] as $key=>$v): ?><tr><td><?php echo ($v["reason"]); ?></td>
			<td><?php echo ($v["timestart"]); ?></td>
			<td><?php echo ($v["timeend"]); ?></td>
			<td><?php if($v['state'] == 1): ?>批假
                             <?php elseif($v['state'] == 0): ?>拒绝批假
                             <?php elseif($v['state'] == -1): ?>未审核<?php endif; ?></td>
			<td class="center"><a href="/newTeacher/Teacher/Leave/edit/id/<?php echo ($v["id"]); ?>">审核</a></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<div class="pagelist"><?php echo ($leave["page"]); ?></div>
</div></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>