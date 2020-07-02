<?php
namespace Kindergarten\Model;
use Think\Model;
class SnoticeModel extends Model{
	protected $insertFields='stitle,scomment,stime';
	protected $updateFields='stitle,scomment,stime';
	
	protected $_validate=array(
	 array('stitle','require','通知标题不能为空'),
	 array('scomment','require','通知内容不能为空'),
	 array('stime','require','发表通知的时间不能为空')
	);
	
	public  function getList(){
		$data['list']=$this->field($field)->where($where)->order($order)->select();
		return $data;
	}
	public function delAll($id){
		return $this->where("id=$id")->delete();
	}
}
