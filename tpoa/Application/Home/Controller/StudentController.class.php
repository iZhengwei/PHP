<?php
namespace Home\Controller;

/**
* 
*/
class StudentController extends CommonController
{
    
    function add()
    {
        $subject = D('Subject');
        $data = $subject -> select();
        $this -> assign('subject', $data);
        $this->display();
    }

    function addOK()
    {
        if(IS_POST){
            $student = D('Student');

            //var_dump($_POST);

            $data = $student -> create();

            $data['password'] = md5(I(post.password));
            //$data['password'] = md5($data['password']);
            
            $data['addtime'] = time();

            //var_dump($data);exit;

            if($student -> add($data)){
                $this->success('添加成功' , 'index');
            }else{
                $this->error('添加失败' , 'add');
            }
        }

    }

    function index()
    {
        // yuanlai
        // $student = D('Student');
        // $data = $student -> select();
        // $this -> assign('data' , $data);
        // $this->display('list');

        // fenye
        $student = D('Student');
        $count = $student -> count();
        $page = new \Think\Page($count,15);
        $show = $page -> show();
        //$data = $student -> limit($page -> firstRow .','. $page -> listRows) -> select();
        //多表查询 table方式
        $data = $student ->field('t1.*,t2.title') -> table('tp_students t1, tp_subject t2') -> where('t1.subject=t2.id') -> limit($page -> firstRow .','. $page -> listRows) -> select();
        //join方式
        $data = $student ->field('t1.*,t2.title') -> join('t1 left join tp_subject t2 on t1.subject=t2.id') -> limit($page -> firstRow .','. $page -> listRows) -> select();
        //dump($data);exit;
        $this -> assign('data' , $data);
        $this -> assign('page' , $show);
        $this->display('list');

    }





// 测试===================

    function lianguan(){
        $student = D('Student');

        /*
        // where 查询
        $map = array();
        //$map['username'] = 'sdgsdg';
        $map['username'] = array('like', '%g%');//模糊查询
        $row = $student -> where($map) -> find();
        dump($row);
        */
       
        // order 
        //$data = $student -> order('id desc') -> select();

        // limit
        //$data = $student -> limit(1) -> select();
               
        // field 
        //$data = $student -> field('id,username,age') -> select();

        // group
        $data = $student -> field('gender, count(*) as count') -> group('gender') ->select();

        dump($data);
    }

    function shiwu()
    {
        $shiwu=M('Shiwu');

        $shiwu->startTrans();

        $flag = true;

        $count = $shiwu -> save(array(
            'money' => 0.1,
            'id' => 1
        ));

        if(!$count){
            $flag = false;
        }

        $count = $shiwu -> save(array(
            'money' => 2000,
            'id' => 2
        ));

        if(!$count){
            $flag = false;
        }

        if($flag){
            $shiwu->commit();
        }else{
            $shiwu->rollback();
        }
    }
}