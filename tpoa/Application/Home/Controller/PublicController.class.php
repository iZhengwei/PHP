<?php
namespace Home\Controller;

use Think\Controller;

/**
* 
*/
class PublicController extends Controller
{
    
    public function login()
    {
        $this->display();
    }

    public function verify(){

        $verify = new \Think\Verify();

        // 'useImgBg'  =>  false,           // 使用背景图片 
        // 'fontSize'  =>  25,              // 验证码字体大小(px)
        // 'useCurve'  =>  true,            // 是否画混淆曲线
        // 'useNoise'  =>  true,            // 是否添加杂点
        // 'length'    =>  5,               // 验证码位数
        $verify -> fontSize = 30;
        $verify -> useCurve = false;
        $verify -> useNoise = false;
        $verify -> length = 4;

        $verify->entry();
    }

    public function checkLogin(){
        if(IS_POST){
            $username = $_POST['UserName'];
            $password = $_POST['Password'];
            $code = $_POST['Code'];

            if(empty($code)){
                $this -> error('验证码不能为空', 'login');
            }

            $verify = new \Think\Verify();
            if(!$verify->check($code)){
                $this-> error('验证码错误，请重新填写', 'login');
            }

            if(empty($username)){
                $this->error('用户名不能为空','login');
            }

            if(empty($password)){
                $this->error('密码不能为空','login');
            }

            $user = M('User');
            $mpa = array();
            $map['username'] = $username;
            $map['password'] = $password;
            $row = $user -> where($map) -> find();
            // dump($user->username);
            // dump($row);exit;

            if($row['id']){

                session('userid', $row['id']);
                session('username', $row['user']);

                $logip = get_client_ip();
                $user -> id = $row['id'];
                $user -> logip = $logip;
                $user -> save();

                $this->redirect('Index/index');
            }else{
                $this->error('登录失败','login');
            }
        }
    }
}