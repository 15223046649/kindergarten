<?php
namespace Kindergarten\Controller;
class SviewController extends CommonController{
	public function index(){
		$sid=session('sid');
		$where=array("sid"=>$sid);
		$data['sview']=D('sview')->getList(
		'sid,scomment,stime',
		$where,
		'sid'
		);
		$this->assign($data);
		$this->display();
	}
	public function del(){
		$sid=I('get.sid',0,'int');
		$rst=D('sview')->delAll($sid);
		if ($rst===false) {
			$this->error('删除家长意见失败');
		}
		$this->success('删除家长意见成功',U('Sview/index'));
	}
}