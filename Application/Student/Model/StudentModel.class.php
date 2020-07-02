<?php
namespace Student\Model;
use Think\Model;
class StudentModel extends Model {
	//校验用户名和密码
	public function checkUser($name,$pwd) {
		$data = $this->field('Student_ID,Student_PWD,Student_NAME,Student_CLA')->where(array('Student_ID'=>$name))->find();
		if($data===null){
			return '用户不存在';
		}
		if($data['Student_PWD']==$pwd){
			//密码正确
			session('Student_ID',$name);
			session('Student_PWD',$pwd);
			session('Student_NAME',$data['Student_NAME']);
			session('Student_CLA',$data['Student_CLA']);
			return true;
		}
		return '密码错误';
	}
}