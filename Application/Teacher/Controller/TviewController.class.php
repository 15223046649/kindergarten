<?php
namespace Teacher\Controller;
class TviewController extends CommonController{
    public function add() {
        $this->display();
    }

    public function do_add() {
        $comment = I("comment");
        if (empty($comment)) {
            $this->error("意见内容不能为空");
        }
        if (mb_strlen(trim($comment), "utf-8") > 100) {
            $this->error("意见内容不能超过100个字");
        }
        $tviewModel = M("Tview");
        $time = gmdate("Y-m-d H:i:s", mktime() + 8 * 3600);
        $data = array("comment" => $comment,
        			  "ttime" => $time
        );
        if (!($tviewModel->create($data) && $tviewModel->add())) {
            $this->error("发表意见失败");
        }
        $this->success("发表意见成功！", U("Tview/add"));
    }
}