<?php
namespace Teacher\Controller;
class TleaveController extends CommonController{
      public function index(){
		if(IS_POST){
        $r = 0;
        $model = M("tleave"); // 实例化 his_wait_user对象 其实就是对应的数据表名
        $reason = I('reason');
        //$timestart = $_POST['timestart'];
        //$timeend = $_POST['timeend'];
        $timestart = I('timestart');
        $timeend = I('timeend');
        
        $data = array( // 要插入的数据  注意key（双引号的）要对应表中的字段

           "reason" => $reason,
           "timestart" => $timestart,
           "state" => -1,
           "timeend" => $timeend
        );
             // $r = $model->create($data)->add();
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
    	$data['tleave'] = D('tleave')->getList('id,timestart,reason,state,timeend','','id');
		$this->assign($data);
		$this->display();   
	}
	public function delete(){   
		$id = I("id");
        $tleaveModel = M("Tleave");
        $result = $tleaveModel->where(array("id" => $id))->delete();
        if (!$result) {
            $this->error("删除失败");
        }
        $this->success("删除成功！", U("Tleave/look"));
	}
	public function revise(){
		$id=I('get.id',0,'int');
		$this->assign($id);
		if (IS_POST) {
			$this->reviseAction($id);
			return ;
		}
		$data['tleave']=D('tleave')->where("id=$id")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($id){
		$rst=$this->create('tleave', 'save', 2,array("id=$id"));
		if ($rst===false) {
			$this->error("修改失败");
		}
		$this->success('修改成功',U('Tleave/look'));
	}
}