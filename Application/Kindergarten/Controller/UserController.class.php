<?php
namespace Kindergarten\Controller;
class UserController extends CommonController{
public function __construct(){
		parent::__construct();
		$allow_action=array( //指定不需要检查登陆的方法列表
		'login','getVerify','register'
		);
		if ($this->userInfo===false && !in_array(ACTION_NAME, $allow_action)){
			$this->error('请先登录。',U('User/login'));
		}
	}
	public function login(){
			if(IS_POST){
				$name=I('post.name','','');
				$pwd=I('post.password','','');
				$rst = $this->checkVerify(I('post.verify'));
				if($rst===false){
					$this->error('验证码错误');
				}
				$rst=D('kindergarten')->checkUser($name,$pwd);
				if ($rst!==true){
					$this->error($rst);
				}
				$this->success('登录成功，请稍后',U('Index/index'));
				return;
			}
			$this->display();
	}
	public function logout(){
		session('[destory]');
		$this->success('退出成功',U('User/index'));
	}
//生成验证码
	public function getVerify(){
		$verify = new \Think\Verify();
		return $verify->entry();
	}
	//检查验证码
	private function checkVerify($code,$id=''){
		$verify = new \Think\Verify();
		return $verify->check($code,$id);
	}
	public function index() {
		$this->display();
	}
}