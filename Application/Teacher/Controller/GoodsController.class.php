<?php
namespace Teacher\Controller;
class GoodsController extends CommonController{
	public function index() {
		$data['goods'] = D('goods')->getList(
			//待查询字段
			'gtitle,gcomment,gtime',
		    '',
			'gid desc'
		);
		//视图
		$this->assign($data);
		$this->display();
	}
}