<?php
namespace Student\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");

class SignController extends CommonController{
	public function index(){
	$this->display();
	}
	public function sign(){
		$r = 0;
		$id= I("id");
		$name = I('name');
		$state = I("state");
		$class = session("Student_CLA");
		//$comment = I("comment");
		$sign = M("sign");
		//$name = session("Student_NAME");
        //$time = gmdate("Y-m-d H:i:s", mktime() + 8 * 3600);
        $time = I('addtime');
        $data = array(
        "id" => $id,
        'name' => $name,
        "state" => $state,
        "addtime" => $time,  
        "class" => $class					  
        );
        $r = $sign->add($data); 
        if($r){
            echo "<script>alert('签到成功！');history.back(-1);</script>";
        }else{
          echo "<script>alert('签到失败！');</script>";       	
       }
}
public function delete(){
	$this->display();
}
public function do_delete(){   
		//if(IS_POST){
	   // $del = $_POST['id'];   
	    //     $del = rtrim($del,',');    
	    //          $Student = D('sign');  
	     //               $data = $Student->delete($del);    
        //  if ($data) {       
          //	echo "<script>alert('删除成功！');</script>";
	      //      // $this->success('删除数据成功！',U('Index/index'));    
	       //   }else{   
	       //    	echo "<script>alert('删除失败！');</script>";

	       //  } }
		//$this->display();		
	  //}
 $id = I("id");
        $messageModel = M("sign");
        $result = $messageModel->where(array("id" => $id))->delete();
        if (!$result) {
            $this->error("删除失败");
        }
        $this->success("删除成功！", U("sign/index"));
    }
}