<?php
namespace Kindergarten\Controller;
//后台控制器 最先来到的是这个这个控制器 然后CommonController最先使用登录
class IndexController extends CommonController{
	//后台首页
	public function index(){
		$this->display();
	}
}