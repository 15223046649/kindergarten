<?php
namespace Teacher\Controller;
use Think\Controller;
class TeacherController extends CommonController{
	public function index(){
		$this->display();
	}
	public function update(){
		$this->display();
	}
	public function do_update(){
		$pwd = session("Teacher_PWD");
		$pwd1 = I("password1");
		$pwd2 = I("password2");
		$data['Teacher_PWD'] = $pwd2;
		$name = session("Teacher_NAME");
		$user = M('Teacher');
		if($pwd1 == $pwd){
			if($pwd1 == $pwd2){
				$this->error("新密码不能与原密码相同");
			}else{
				$user->where(array('Teacher_NAME'=>$name))->save($data);
			 	$this->success('密码修改成功',U('Teacher/index'));
			}
		}else{
			$this->error('原密码错误');
		}
	}
	
	public function revise(){
		$Teacher_ID=session("Teacher_ID");
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
			$this->error("签到失败");
		}
		$this->success('签到成功',U('Teacher/index'));
	}
}