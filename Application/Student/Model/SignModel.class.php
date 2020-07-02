<?php
namespace Student\Model;
use Think\Model;
class SignModel extends Model {
	protected $_validate    =   array(
        array('reason','require','标题必须'),
        );
    // 定义自动完成
   // protected $_auto    =   array(
    //    array('create_time','time',1,'function'),
     //   );
	public function getList($field,$where,$order){
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,5);
		$limit = $Page->firstRow.','.$Page->listRows;
		$data['page'] = $Page->show();
		$data['list'] = $this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}

}
