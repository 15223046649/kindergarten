<?php
namespace Kindergarten\Controller;
class TleaveController extends CommonController{
	public function index(){
		$id=session('id');
		$where=array("id"=>$id);
		$data['tleave']=D('tleave')->getList(
		'id,reason,timestart,state,timeend',
		$where,
		'id'
		);
		$this->assign($data);
		$this->display();
	}
	
	public function del(){
		$id=I('get.id',0,'int');
		$rst=D('tleave')->delAll($id);
		if ($rst===false) {
			$this->error('删除教师假条失败');
		}
		$this->success('删除教师假条成功',U('Tleave/index'));
	}
	
	public function edit(){
        $leave=D('tleave');
         if(IS_POST){
            $data['state1']=I('state1');
            session('aa',$data['state1']);
            if($leave->create()){
                if($leave->save()){
                    $this->success('操作成功',U('Tleave/index'));  
                }else{
                    $this->error('操作失败！',U('Tleave/index'));
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
                                'id'=> $id, 
                                'state' => 2,
                                );
                    $leave->create($aaa);
                    $leave->save($aaa);
                     
                }else if((session('aa')==1)&&($leaves[state2]==0)){
                	$bbb=array(
                                'id'=> $id, 
                                'state' => 3, 
                                );
                    $leave->create($bbb);
                    $leave->save($bbb);
                }else if((session('aa')==0)&&($leaves[state2]==1)){
                     $ccc=array(
                                'id'=> $id, 
                                'state' => 3, 
                                );
                     $leave->create($ccc);
                     $leave->save($ccc);
                }else if((session('aa')==0)&&($leaves[state2]==0)){
                     $ddd=array(
                                'id' => $id, 
                                'state' => 3,
                                );
                     $leave->create($ddd);
                     $leave->save($ddd);
                    
                }
        $this->assign('tleave',$leaves);
        $this->display();
    }
}