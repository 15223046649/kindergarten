<?php
namespace Kindergarten\Controller;
use Think\Controller;
class CommonController extends Controller{
	/**
	 * 公共数据创建方法
	 * @param string $tablename 表名
	 * @param string $func 操作方法
	 * @param int $type 验证时机
	 * @param string/array $where 查询条件
	 * @return mixed 操作结果
	 */
	protected function create($tablename,$func,$type=1,$where=array()){
		$Model = D($tablename);
		if(!$Model->create(I('post.'),$type)){
			$this->error($Model->getError());
		}
		return $Model->where($where)->$func();
	}
	protected $userInfo = false;
	public function __construct(){
		parent::__construct();
		$this->checkUser();
	}
	private function checkUser(){
		if (session('?user_id')){
			$userinfo=array(
			'id'=>session('user_id'),
			'name'=>session('user_name'),
			);
			$this->userInfo=$userinfo;
			$this->assign($userinfo);
		}
	}
}