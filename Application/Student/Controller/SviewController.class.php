<?php
namespace Student\Controller;
class SviewController extends CommonController{
	
 public function index(){
 	if(IS_POST){
        $r = 0;

        $Wait = M("sview"); 
        $view = I('view');
        $time = gmdate("Y-m-d H:i:s",mktime() + 8*3600);
        $data = array( // 要插入的数据  注意key（双引号的）要对应表中的字段

            "scomment" => $view,
            "stime" => $time
        );

        $r = $Wait->add($data); 
        if($r){

            echo "<script>alert('发表成功！');</script>";
        	
        }else{
        	echo "<script>alert('发表失败！');</script>";
        	
        }
 	} $this->display(); 
 }           
}

    
	

	
	

	