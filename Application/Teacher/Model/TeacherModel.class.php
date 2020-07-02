<?php
namespace Teacher\Model;
use Think\Model;
class TeacherModel extends Model {
	//校验用户名和密码
	public function checkUser($name,$pwd) {
		$data = $this->field('Teacher_ID,Teacher_PWD,Teacher_NAME,Teacher_CLA')->where(array('Teacher_ID'=>$name))->find();
		if($data===null){
			return '用户不存在';
		}
		if($data['Teacher_PWD']==$pwd){
			//密码正确
			session('Teacher_ID',$name);
			session('Teacher_PWD',$pwd);
			session('Teacher_NAME',$data['Teacher_NAME']);
			session('Teacher_CLA',$data['Teacher_CLA']);
			return true;
		}
		return '密码错误';
	}
}