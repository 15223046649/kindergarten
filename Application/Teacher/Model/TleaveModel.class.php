<?php
namespace Teacher\Model;
use Think\Model;
class TleaveModel extends Model {
    // 定义自动完成
   // protected $_auto    =   array(
    //    array('create_time','time',1,'function'),
     //   );
    protected $insertFields='reason,timestart,timeend,state';
	protected $updateFields='reason,timestart,timeend,state';
	
	protected $_validate=array(
	 array('reason','require','原因不能为空'),
	 array('timeend','require','请假结束时间不能为空')
	);
	public function getList($field,$where,$order){
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,5);
		$limit = $Page->firstRow.','.$Page->listRows;
		$data['page'] = $Page->show();
		$data['list'] = $this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
}