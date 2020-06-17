<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>安和幼儿园管理系统-布局</title>
		<link rel="stylesheet" href="/newTeacher/Public/font/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/newTeacher/Public/css/mystyle.css" />
	</head>
	<body>
		<header>
			<!-- <i class="fa fa-child logo" aria-hidden="true">安和幼儿园管理系统</i> -->
			<h1>安和幼儿园管理系统</h1>
			<hr>
		</header>
		<aside>
			<h3>热门业务</h3>
			<hr>
			<ul class="aside-1">
				<li><a href="#" target="_blank"><i class="fa fa-check" aria-hidden="true"></i> 家园互动系统</a></li>
				<li><a href="#" target="_blank"><i class="fa fa-check" aria-hidden="true"></i> 安全接送管理</a></li>
				<li><a href="#" target="_blank"><i class="fa fa-check" aria-hidden="true"></i> 通知接收管理</a></li>
			</ul>
			<hr>
			<h3>热门咨询</h3>
			<hr>
			<ul class="aside-1">
				<li><a href="#" target="_blank"><i class="fa fa-question-circle-o"></i> 如何保证孩子安全？</a></li>
				<li><a href="#" target="_blank"><i class="fa fa-question-circle-o"></i> 可以代接送吗？</a></li>
				<li><a href="#" target="_blank"><i class="fa fa-question-circle-o"></i> 孩子在幼儿园干什么？</a></li>
			</ul>

		</aside>
		<section>
			<div class="section-1">
				<ul id="myTab" >
					<li><h2><i class="fa fa-registered logo-1" aria-hidden="true"></i>登录</h2></li>
					<li style="height:50"><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/newTeacher/index.php/Kindergarten/User/login.html"><font color="#09C" size=8>园长端</font></a></li><br />
					<li style="height:50"><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/newTeacher/index.php/Student/Index/Login/index.html"><font color="#09C" size=8>家长端</font></a></li><br />
					<li style="height:50"><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/newTeacher/index.php/Teacher/Index/Login/index.html"><font color="#09C" size=8>教师端</font></a></li><br />
		        </ul>	
		</div>
		</section>
		<footer>
			<div class="tanxing">				
		    <p>	
					联系我们	<br/>							
					Tel:1465890900<br/>
					Email：2456789056@qq.com<br/>
					FAX:0000-234345	<br/>			
			</p>
			
			<p>				
					    主要服务<br/>
						Child care management<br/>
						Agent joining consulting<br/>
						Product consultation<br/>					
			</p>
				
			<p>			
			        关于我们<br/>			
					Report a call:63070940	<br/>		
					Complaints suggestions<br/>
					Hotline consultation<br/>					
			</p>
			</div>
		</footer>
		
	</body>
</html>