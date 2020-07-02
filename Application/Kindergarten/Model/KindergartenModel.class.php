<?php
namespace Kindergarten\Model;
use Think\Model;
class KindergartenModel extends Model{
//校验用户名和密码
	public function checkUser($name,$pwd) {
		$data = $this->field('id,name,password')->where(array('name'=>$name,'password'=>$pwd))->find();
		if($data===null){
			return '用户名不存在或密码错误';
		} else{
			//密码正确
			session('user_name',$name);
			session('user_id',$data['id']);
			return true;
		}
	}
	public function getList(){
		$data['list']=$this->field($field)->where($where)->order($order)->select();
		return $data;
	}
}