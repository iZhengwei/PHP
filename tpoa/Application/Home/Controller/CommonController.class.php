<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        if(!session('?username')){
            $this->redirect('Home/Public/login');
        }
    }
}