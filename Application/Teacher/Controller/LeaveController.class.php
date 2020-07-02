<?php
namespace Teacher\Controller;
class LeaveController extends CommonController{
	public function index() {
		$data['leave'] = D('leave')->getList(
			//待查询字段
			'id,reason,timestart,timeend,state',
		    '',
			'id desc'
		);
		//视图
		$this->assign($data);
		$this->display();
	}
	public function edit(){
        $leave=D('leave');
         if(IS_POST){
            $data['state1']=I('state1');
            session('aa',$data['state1']);
            if($leave->create()){
                if($leave->save()){
                    $this->success('操作成功',U('Leave/index'));  
                }else{
                    $this->error('操作失败！',U('Leave/index'));
                }
            }else{
                $this->error($leave->getError());
            }
            return;
        }
        $id=I('id');
        $leaves = $leave->find($id);
         if((session('aa')==1)&&($leaves[state2]==1)){
                    $aaa=array(
                                'id'    => $id, 
                                'state' => 2,
                                );
                    $leave->create($aaa);
                     $leave->save($aaa);
                     
                }else if((session('aa')==1)&&($leaves[state2]==0)){
                	$bbb=array(
                                'id'    => $id, 
                                'state' => 3, 
                                );
                    $leave->create($bbb);
                     $leave->save($bbb);
                }else if((session('aa')==0)&&($leaves[state2]==1)){
                     $ccc=array(
                                'id'    => $id, 
                                'state' => 3, 
                                );
                     $leave->create($ccc);
                     $leave->save($ccc);
                }else if((session('aa')==0)&&($leaves[state2]==0)){
                     $ddd=array(
                                'id'    => $id, 
                                'state' => 3,
                                );
                     $leave->create($ddd);
                     $leave->save($ddd);
                    
                }
        $this->assign('leave',$leaves);
        $this->display();
    }
}