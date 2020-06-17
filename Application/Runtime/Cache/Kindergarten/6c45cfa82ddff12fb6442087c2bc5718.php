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
<h3 style="text-align:left">园长个人信息表</h3>
<form method="post" enctype="multipart/form-data" style="align:center">
<table  border="1" cellspacing="0px" >
<tr><th width="120"><p style="text-align:center">姓名</p></th>
<th width="180"><p style="text-align:center">密码</p></th>
<th width="180"><p style="text-align:center">性别</p></th>
<th width="180"><p style="text-align:center">联系方式</p></th>
<th width=""><p style="text-align:center">操作</p></th>
</tr>
<?php if(is_array($kindergarten["list"])): foreach($kindergarten["list"] as $key=>$v): ?><td><p style="text-align:center"><?php echo ($v["name"]); ?></p></td>
<td><p style="text-align:center"><?php echo ($v["password"]); ?></p></td>
<td><p style="text-align:center"><?php echo ($v["sex"]); ?></p></td>
<td><p style="text-align:center"><?php echo ($v["phonenum"]); ?></p></td>
<td class="center"><a href="/newTeacher/Kindergarten/Kindergarten/revise/id/<?php echo ($v["id"]); ?>">修改</a>
</td>
</tr><?php endforeach; endif; ?>
</table>
<div class="pagelist"><?php echo ($goods["page"]); ?></div>
</div>
<script>
$("select").change(function(){
	windows.location.href="/newTeacher/Kindergarten/Kindergarten/index/"+$(this).val();
});
$(function(){
	$("tr:odd").addClass("odd");
});
}
</script>
</body>
</html></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>