<?php
namespace Student\Controller;
class LeaveController extends CommonController{
      public function index(){
		if(IS_POST){
        $r = 0;
        $model = M("leave"); // 实例化 his_wait_user对象 其实就是对应的数据表名
        $reason = I('reason');
        $timestart = I('timestart');
        $timeend = I('timeend');        
        $data = array( // 要插入的数据  注意key（双引号的）要对应表中的字段
           "reason" => $reason,
           "timestart" => $timestart,
           "state" => -1,
           "timeend" => $timeend
        );
        $r = $model->add($data); 
        if($r){
            echo "<script>alert('请假提交成功！');</script>";
        }else{
          echo "<script>alert('请假提交失败！');</script>";       	
       }
 	} 
 	$this->display(); 
 }    
  public  function look(){
    	$data['leave'] = D('leave')->getList('id,timestart,reason,state,timeend','','id desc');
		$this->assign($data);
		$this->display();   
}
	public function delete(){   
		if(IS_POST){
	    $del = $_POST['id'];   
	         $del = rtrim($del,',');    
	              $Student = D('leave');  
	                    $data = $Student->delete($del);    
          if ($data) {       
          	echo "<script>alert('删除成功！');</script>";
	            // $this->success('删除数据成功！',U('Index/index'));    
	          }else{   
	           	echo "<script>alert('删除失败！');</script>";

	         } }
		$this->display();		
	  }
	  
}

    