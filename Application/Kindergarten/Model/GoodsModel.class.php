<?php
namespace Kindergarten\Model;
use Think\Model;
class GoodsModel extends Model{
	protected $insertFields='gtitle,gcomment,gtime';
	protected $updateFields='gtitle,gcomment,gtime';
	
	protected $_validate=array(
	 array('gtitle','require','通知标题不能为空'),
	 array('gcomment','require','通知内容不能为空'),
	 array('gtime','require','发表通知的时间不能为空')
	);
	
	public  function getList(){
		$data['list']=$this->field($field)->where($where)->order($order)->select();
		return $data;
	}
	public function delAll($gid){
		return $this->where("gid=$gid")->delete();
	}
}