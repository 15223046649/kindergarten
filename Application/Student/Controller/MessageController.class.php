<?php
namespace Student\Controller;
class MessageController extends CommonController{
    //查看通知
    public function index() {
    	$data['message'] = D('message')->getList('id,theme,comment,time,name','','id desc');
		$this->assign($data);
		$this->display();   
	}
	
} 