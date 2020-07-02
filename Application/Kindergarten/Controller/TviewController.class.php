<?php
namespace Kindergarten\Controller;
class TviewController extends CommonController{
	public function index(){
		$id=session('id');
		$where=array("id"=>$id);
		$data['tview']=D('tview')->getList(
		'id,comment,ttime',
		$where,
		'id'
		);
		$this->assign($data);
		$this->display();
	}
	public function del(){
		$id=I('get.id',0,'int');
		$rst=D('tview')->delAll($id);
		if ($rst===false) {
			$this->error('删除教师意见失败');
		}
		$this->success('删除教师意见成功',U('Tview/index'));
	}
}