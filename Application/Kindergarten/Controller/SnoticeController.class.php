<?php
namespace Kindergarten\Controller;
class SnoticeController extends CommonController{
	public function add(){
	if (IS_POST) {
		$rst = $this->create('snotice','add');
		if ($rst===false) {
			$this->error($rst->getError());
		}
		$this->success('添加通知成功',U('Snotice/index'));
		return ;
	}
	$this->display();
	}	
	public function index(){
		$data['snotice']=D('snotice')->getList();
		$this->assign($data);
		$this->display();
	}
	public function revise(){
		$id=I('get.id',0,'int');
		$this->assign($id);
		if (IS_POST) {
			$this->reviseAction($id);
			return ;
		}
		$data['snotice']=D('snotice')->where("id=$id")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($id){
		$rst=$this->create('snotice', 'save', 2,array("id=$id"));
		if ($rst===false) {
			$this->error("修改通知失败");
		}
		$this->success('修改通知成功',U('Snotice/index'));
	}
	public function del(){
		$id=I('get.id',0,'int');
		$rst=D('snotice')->delAll($id);
		if ($rst===false) {
			$this->error('删除通知失败');
		}
		$this->success('删除通知成功',U('Snotice/index'));
	}
}
