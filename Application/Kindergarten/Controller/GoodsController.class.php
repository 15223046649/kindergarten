<?php
namespace Kindergarten\Controller;
class GoodsController extends CommonController{
	public function add(){
	if (IS_POST) {
		$rst = $this->create('goods','add');
		if ($rst===false) {
			$this->error($rst->getError());
		}
		$this->success('添加通知成功',U('Goods/index'));
		return ;
	}
	$this->display();
	}	
	public function index(){
		$data['goods']=D('goods')->getList();
		$this->assign($data);
		$this->display();
	}
	public function revise(){
		$gid=I('get.gid',0,'int');
		$this->assign($gid);
		if (IS_POST) {
			$this->reviseAction($gid);
			return ;
		}
		$data['goods']=D('goods')->where("gid=$gid")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($gid){
		$rst=$this->create('goods', 'save', 2,array("gid=$gid"));
		if ($rst===false) {
			$this->error("修改通知失败");
		}
		$this->success('修改通知成功',U('Goods/index'));
	}
	public function del(){
		$gid=I('get.gid',0,'int');
		$rst=D('goods')->delAll($gid);
		if ($rst===false) {
			$this->error('删除通知失败');
		}
		$this->success('删除通知成功',U('Goods/index'));
	}
}
