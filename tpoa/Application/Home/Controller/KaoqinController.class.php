<?php
namespace Home\Controller;
/**
* 
*/
class KaoqinController extends CommonController
{
    
    function add()
    {
        $subject = D('Subject');
        $data = $subject -> select();
        $this -> assign('subject', $data);
        $this -> assign('time', date('Y-m-d'));
        $this->display();
    }

    function addOK()
    {
        if(IS_POST){
            $kaoqin = D('Kaoqin');
            $kaoqin -> truename = I('post.truename');
            $kaoqin -> subject = I('post.subject');
            $kaoqin -> addtime = I('post.addtiddme');
            //var_dump($_POST);exit;

            if($kaoqin->add()){
                $this -> success('添加成功', 'index');
            }else{
                $this -> error('添加失败', 'add');
            }
            
        }
    }

    function getStudent(){
        if(IS_AJAX){
            $subject = I('post.subject');
            $truename = I('post.truename');

            $student = D('student');

            $map = array();
            $map[]['subject'] = $subject;
            $map[]['truename'] = array('like', "$truename%");

            $data = $student -> where($map) -> select();
            //echo $student->getLastSql();var_dump($_POST);exit;

            $this -> ajaxReturn($data);
        }
    }

    function index()
    {
        $kaoqin = D('Kaoqin');
        $count = $kaoqin -> count();
        $page = new \Think\Page($count, 15);
        $show = $page ->show();
        $data = $kaoqin -> relation(true) -> limit($page -> firstRow, $page -> listRows) -> select();
        //dump($data);exit;
        $this -> assign('data', $data);
        $this -> assign('page', $show);
        $this->display('list');
    }

    function tongji(){
        $subject = M('Subject');
        $data = $subject -> select();
        $this -> assign('subject', $data);

        $this->display();
    }


    function charts(){
        if(IS_AJAX){
            $subject = I('post.subject');
            $addtime = I('post.addtime');

            $kaoqin = M('Kaoqin');

            $sql = "select truename, count(*) as count from tp_kaoqin where subject=$subject and substr(addtime, 1, 7)='$addtime' group by truename";
            $data = $kaoqin -> query($sql);

            $str = '[';
            foreach ($data as $value) {
                $str .= "['{$value['truename']}', {$value['count']}],";
            }
            $str = rtrim($str, ',');
            $str .= ']';
            $this -> assign('str', $str);
            // dump($data);exit;
            $this->display();
        }
    }
}