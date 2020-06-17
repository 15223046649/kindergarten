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
		<div class="item"><div class="title">请假-审核</div>

<div class="data-list clear">
	<table border="0">
		<tr align="center"><th width="50">id</th>
		<th width="100">开始时间</th>
		<th width="170">原因</th>
        <th width="100">结束时间</th>
        <th width="60">状态</th>
        </tr>
		<?php if(is_array($leave["list"])): foreach($leave["list"] as $key=>$v): ?><tr><td><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["timestart"]); ?></td>
			<td class="center"><?php echo ($v["reason"]); ?></td>
			<td class="center"><?php echo ($v["timeend"]); ?></td>
			<!--<td class="center"><?php echo ($v["state"]); ?></td>-->
		 <td class="center">
							 <?php if($v["state"] == 1): ?>批假
                             <?php elseif($v["state"] == 0): ?>拒绝批假
                             <?php elseif($v["state"] == -1): ?>未审核<?php endif; ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<div class="pagelist"><?php echo ($leave["page"]); ?></div>
</div>
</div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>