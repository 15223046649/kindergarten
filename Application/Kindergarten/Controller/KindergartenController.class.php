<?php
namespace Kindergarten\Controller;
class KindergartenController extends CommonController{
	public function index(){
		$data['kindergarten']=D('kindergarten')->getList();
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
		$data['kindergarten']=D('kindergarten')->where("id=$id")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($id){
		$rst=$this->create('kindergarten', 'save', 2,array("id=$id"));
		if ($rst===false) {
			$this->error("个人信息修改失败");
		}
		$this->success('个人信息修改成功',U('Kindergarten/index'));
	}
}