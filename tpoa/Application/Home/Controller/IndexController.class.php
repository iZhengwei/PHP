<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function index(){
        $user=D('User');
        $data=$user->select();
        // var_dump($data);
        $this->assign('data',$data);
        $this->display();
    }

    public function top(){
        $this->display();
    }

    public function left(){
        $this->display();
    }

    public function right(){
        $this->display();
    }

}