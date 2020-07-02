<?php
namespace Student\Controller;
use Think\Controller;
class InformationController extends CommonController{
      public function update(){ 
      if(IS_GET){ 
      $this->display();
      } 
    if(IS_POST){
      $User = M('student') ;
      $name = I('name') ;
      $data['Student_PWD'] = I('pwd'); 
      $id = I('id') ;
      $datanum = $User->where(array('Student_NAME'=>$name))->find();
      if ($datanum){
        if ($id === $datanum['Student_ID']) {
          $User->where(array('Student_NAME'=>$name))->save($data); // 根据条件更新记录
         $this->success('密码修改成功',U('Login/index')) ; 
        }else{
          $this->error('id填写不正确,请重新填写'); 
          exit();
        }
      }else{
        $this->error('用户不存在，请注册',U('signup'));
          }

    }
      }
}
