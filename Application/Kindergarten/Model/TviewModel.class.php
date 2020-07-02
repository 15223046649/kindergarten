<?php
namespace Kindergarten\Model;
use Think\Model;
class TviewModel extends Model{
	public  function getList(){
		$count=$this->where($where)->count();
		$Page=new \Think\Page($count,2);
		$limit=$Page->firstRow.','.$Page->listRows;
		
		$data['page']=$Page->show();
		$data['list']=$this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
	public function delAll($id){
		return $this->where("id=$id")->delete();
	}
}