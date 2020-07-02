<?php
namespace Kindergarten\Model;
use Think\Model;
class StudentModel extends Model{
	protected $insertFields='Student_ID,Student_NAME,Student_SEX,Student_CLA,Student_PWD,Student_PARN,Student_PART';
	protected $updateFields='Student_ID,Student_NAME,Student_SEX,Student_CLA,Student_PWD,Student_PARN,Student_PART';
	
	protected $_validate=array(
	 array('Student_ID','require','学生ID不能为空'),
	 array('Student_NAME','require','学生姓名不能为空'),
	 array('Student_SEX','require','学生性别不能为空'),
	 array('Student_CLA','require','学生所在班级不能为空'),
	 array('Student_PWD','require','学生密码不能为空'),
	 array('Student_PARN','require','家长姓名不能为空'),
	 array('Student_PART','require','家长联系方式不能为空'),
	);
	
	public  function getList(){
		$count=$this->where($where)->count();
		$Page=new \Think\Page($count,6);
		$limit=$Page->firstRow.','.$Page->listRows;
		
		$data['page']=$Page->show();
		$data['list']=$this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
	
	/*private $page="";
	public function getList($pagesize=5){
		$where='1';
		$tableName=$this->getTableName();
		$count=$this->where($where)->count();
		$Page=new \Think\Page($count,$pagesize);
		$this->page=$Page->show();
		$limit=$Page->firstRow.','.$Page->listRows;
		return $this->query("select *from $tableName where $where order by $tableName.`Student_ID` asc limit $limit");
	}
	*/
	public function getPage(){
		return $this->page;
	}
	public function delAll($Student_ID){
		return $this->where("Student_ID=$Student_ID")->delete();
	}
}