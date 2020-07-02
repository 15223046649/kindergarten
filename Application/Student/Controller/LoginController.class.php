<?php
namespace Student\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		//处理表单
		if (IS_POST){
			//判断验证码
			$this->checkVerify(I('post.verify'));
			//判断用户名和密码
			$name = I('post.user','','');
			$pwd = I('post.pwd','','');
			$rst = D('student')->checkUser($name,$pwd);
			if($rst!==true){
				$this->error($rst);
			}
			$this->success('登录成功，请稍后',U('Index/index'));
			return;
		}
		$this->display();
	}
	//退出
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Login/index'));
	}
	//生成验证码
	public function getVerify() {
		$verify = new \Think\Verify();
		return $verify->entry();
	}
	//检查验证码
	private function checkVerify($code, $id = '') {
		$verify = new \Think\Verify();
		$rst = $verify->check($code, $id);
		if($rst!==true){
			$this->error('验证码输入有误');
		}
	}
}