<?php
namespace Kindergarten\Controller;
class TeacherController extends CommonController{
	public function add(){
	if (IS_POST) {
		$rst = $this->create('teacher','add');
		if ($rst===false) {
			$this->error($rst->getError());
		}
		$this->success('添加教职工信息成功',U('Teacher/index'));
		return ;
	}
	$this->display();
	}		
	
	public function index(){
		$cla=session('Teacher_CLA');
		$where=array("Student_CLA"=>$cla);
		$data['teacher']=D('teacher')->getList(
		'Teacher_ID,Teacher_PWD,Teacher_Name,Teacher_NAME,Teacher_SEX,Teacher_CLA',
		$where,
		'Teacher_ID'
		);
		$this->assign($data);
		$this->display();
	}
	public function revise(){
		$Teacher_ID=I('get.Teacher_ID',0,'int');
		$this->assign($Teacher_ID);
		if (IS_POST) {
			$this->reviseAction($Teacher_ID);
			return ;
		}
		$data['teacher']=D('teacher')->where("Teacher_ID=$Teacher_ID")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($Teacher_ID){
		$rst=$this->create('teacher', 'save', 2,array("Teacher_ID=$Teacher_ID"));
		if ($rst===false) {
			$this->error("修改教职工信息失败");
		}
		$this->success('修改教职工信息成功',U('Teacher/index'));
	}
	public function del(){
		$Teacher_ID=I('get.Teacher_ID',0,'int');
		$rst=D('teacher')->delAll($Teacher_ID);
		if ($rst===false) {
			$this->error('删除教职工信息失败');
		}
		$this->success('删除教职工信息成功',U('Teacher/index'));
	}
}