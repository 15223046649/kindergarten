<?php
namespace Student\Controller;
class SnoticeController extends CommonController{
    //查看通知
    public function index() {
    	$data['snotice'] = D('snotice')->getList('id,stitle,scomment,stime','','id desc');
		$this->assign($data);
		$this->display();   
	}
}
