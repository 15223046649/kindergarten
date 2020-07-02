<?php
namespace Teacher\Model;
use Think\Model;
class MessageModel extends Model {
	protected $insertFields='theme,comment,time,name';
	protected $updateFields='theme,comment,time,name';
	
	protected $_validate=array(
	 array('theme','require','通知标题不能为空'),
	 array('comment','require','通知内容不能为空')
	);
	public function getList($field,$where,$order){
		//查询数据
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,5);
		$limit = $Page->firstRow.','.$Page->listRows;
		//取得数据
		$data['page'] = $Page->show();
		$data['list'] = $this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
}