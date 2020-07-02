<?php
namespace Kindergarten\Model;
use Think\Model;
class TeacherModel extends Model{
	protected $insertFields='Teacher_ID,Teacher_PWD,Teacher_NAME,Teacher_SEX,Teacher_SUB,Teacher_CLA,Teacher_State,Teacher_StateTime';
	protected $updateFields='Teacher_ID,Teacher_PWD,Teacher_NAME,Teacher_SEX,Teacher_SUB,Teacher_CLA,Teacher_State,Teacher_StateTime';
	
	protected $_validate=array(
	 array('Teacher_ID','require','教师ID不能为空'),
	 array('Teacher_PWD','require','教师密码不能为空'),
	 array('Teacher_Name','require','教师姓名不能为空'),
	 array('Teacher_SEX','require','教师性别不能为空'),
	 array('Teacher_SUB','require','教师任教科目不能为空'),
	 array('Teacher_CLA','require','教师所在班级不能为空'),
	 array('Teacher_State','require','教师签到情况不能为空'),
	 array('Teacher_StateTime','require','教师签到时间不能为空')
	);
	
	public  function getList(){
		$count=$this->where($where)->count();
		$Page=new \Think\Page($count,3);
		$limit=$Page->firstRow.','.$Page->listRows;
		
		$data['page']=$Page->show();
		$data['list']=$this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
	public function delAll($Teacher_ID){
		return $this->where("Teacher_ID=$Teacher_ID")->delete();
	}
}