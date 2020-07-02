<?php
namespace Kindergarten\Controller;
class StudentController extends CommonController{
	public function add(){
		if (IS_POST) {
			$rst=$this->create('student', 'add');
			if ($rst===false) {
				$this->error($rst->getError());
			}
			$this->success('添加学生信息成功',U('Student/index'));
			return ;
		}
		$this->display();
	}
	
	
	public function index(){
		$cla=session("Student_CLA");
		$where=array("Student_CLA"=>$cla);
		$data['student']=D('student')->getList(
		'Student_ID,Student_NAME,Student_SEX,Student_CLA,Student_PARN,Student_PART',
		$where,
		'Student_ID'
		);
		$this->assign($data);
		$this->display();
		
		/*$User=M('student');
		$data=I('post.Student_CLA');
		if ($data<>''){
			$map['Student_CLA']=$data;
		}
		$count=$User->where($map)->count();
		$Page=new \Think\Page($count,6);
		$list=$User->where($map)->order('Student_CLA')->limit($p->firstRow,$p->listRows)->select();
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('page',$Page->show());
		$this->display();*/
		/*
		if(I('keyword')){
        $keyword = I('keyword');
        $map['name'] = array('like','%'.$keyword.'%');
    	}
    	$crm_name = M('student')->where($map)->order('Student_CLA desc')->field($field)->select();
    	$this->ajaxReturn($crm_name);
    	*/
	}
	public function revise(){
		$Student_ID=I('get.Student_ID',0,'int');
		$this->assign($Student_ID);
		if (IS_POST) {
			$this->reviseAction($Student_ID);
			return ;
		}
		$data['student']=D('student')->where("Student_ID=$Student_ID")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($Student_ID){
		$rst=$this->create('student', 'save', 2,array("Student_ID=$Student_ID"));
		if ($rst===false) {
			$this->error("修改学生信息失败");
		}
		$this->success('修改学生信息成功',U('Student/index'));
	}
	public function del(){
		$Student_ID=I('get.Student_ID',0,'int');
		$rst=D('student')->delAll($Student_ID);
		if ($rst===false) {
			$this->error('删除学生信息失败');
		}
		$this->success('删除学生信息成功',U('Student/index'));
	}
	
}