<?php
namespace Teacher\Controller;
class MessageController extends CommonController{
	public function index() {
		$name = session("Teacher_NAME");
		$where = array(
					   "name" => $name
		);
		$data['message'] = D('message')->getList(
			//待查询字段
			'id,theme,comment,time',
		    $where,
			'id desc'
		);
		//视图
		$this->assign($data);
		$this->display();
	}
	public function add() {
        $this->display();
    }

    public function do_add() {
    	$theme = I("theme");
        $comment = I("comment");
        if (empty($comment)) {
            $this->error("通知内容不能为空");
        }
        if (mb_strlen(trim($comment), "utf-8") > 100) {
            $this->error("通知内容不能超过100个字");
        }
        $messageModel = M("Message");
        $name = session("Teacher_NAME");
        $time = gmdate("Y-m-d H:i:s", mktime() + 8 * 3600);
        $data = array("theme" => $theme, 
    				  "comment" => $comment,
    				  "time" => $time, 
    				  "name" => $name
        );
        if (!($messageModel->create($data) && $messageModel->add())) {
            $this->error("发表通知失败");
        }
        $this->success("发表通知成功！", U("Message/add"));
    }
    
	public function delete() {
        $id = I("id");
        $messageModel = M("Message");
        $result = $messageModel->where(array("id" => $id))->delete();
        if (!$result) {
            $this->error("删除失败");
        }
        $this->success("删除成功！", U("Message/index"));
    }
	public function revise(){
		$id=I('get.id',0,'int');
		$this->assign($id);
		if (IS_POST) {
			$this->reviseAction($id);
			return ;
		}
		$data['message']=D('message')->where("id=$id")->find();
		$this->assign($data);
		$this->display();
	}
	private function reviseAction($id){
		$rst=$this->create('message', 'save', 2,array("id=$id"));
		if ($rst===false) {
			$this->error("修改通知失败");
		}
		$this->success('修改通知成功',U('Message/index'));
	}
}