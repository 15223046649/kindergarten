<?php
namespace Student\Controller;
use Think\Controller;
class CommonController extends Controller {
	//构造方法
	public function __construct() {
		parent::__construct();
		//登录检查
		$this->checkUser();
	}
	//检查登录
	private function checkUser(){
		if(!session('?Student_ID')){
			$this->error('请稍候',U('Login/index'));
		}
	}
	
	protected function create($tablename,$func,$type=1,$where=array()){
		$Model = D($tablename);
		if(!$Model->create(I('post.'),$type)){
			$this->error($Model->getError());
		}
		if(empty($where)){
			return $Model->$func();
		}
		return $Model->where($where)->$func();
	}
}
