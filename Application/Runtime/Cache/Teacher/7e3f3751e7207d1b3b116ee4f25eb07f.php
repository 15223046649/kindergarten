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
			<li><a href="/newTeacher/Teacher/Suggest/add" id="Suggest_add">发表意见</a></li>
			<li><a href="/newTeacher/Teacher/Notice/index" id="Notice_index">查看通知</a></li>
			<li><a href="/newTeacher/Teacher/Notice/add" id="Notice_add">发布通知</a></li>
			<li><a href="/newTeacher/Teacher/Leave/index" id="Leave_index">请假管理</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">发布通知</div>
<div class="data-edit clear">
	<form method="post" action="/newTeacher/Teacher/Notice/do_add">
	<table>
	<tr><td>通知主题</td><td>
    <input type="text" name="theme" id="theme"></td></tr>
    <tr><td>通知内容</td><td>
    <textarea name="comment" id="comment"></textarea></td></tr>
    <tr><td>&nbsp;</td><td><input style="width:50px;" type="submit" value="发 布" /></td></tr>
    </table>
	</form>
	<?php if(is_array($notice_list)): $i = 0; $__LIST__ = $notice_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div>
            <?php echo ($item["comment"]); ?><br/>
            	留言时间：<?php echo (date('Y-m-d H:i:s',$item["time"])); ?>
                <a href="<?php echo U('delete?id='.$item['id']);?>" onclick="return confirm('确定删除此条留言？')">删除</a>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>