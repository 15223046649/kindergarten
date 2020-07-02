<?php
namespace Teacher\Controller;
class StudentController extends CommonController{
	public function index() {
		$cla = session("Teacher_CLA");
		$where = array(
					   "Student_CLA" => $cla
		);
		$data['student'] = D('student')->getList(
			//待查询字段
			'Student_ID,Student_NAME,Student_SEX,Student_PARN,Student_PART',
		    $where,
			'Student_ID'
		);
		//视图
		$this->assign($data);
		$this->display();
	}
}