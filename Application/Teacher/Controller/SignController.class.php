<?php
namespace Teacher\Controller;
class SignController extends CommonController{
	public function index() {
		$cla = session("Teacher_CLA");
		$where = array(
					   "class" => $cla
		);
		$data['sign'] = D('sign')->getList(
			//待查询字段
			'id,name,state,addtime',
		    $where,
			'id'
		);
		//视图
		$this->assign($data);
		$this->display();
	}
}