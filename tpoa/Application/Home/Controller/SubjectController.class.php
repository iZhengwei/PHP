<?php
namespace Home\Controller;

/**
* 
*/
class SubjectController extends CommonController
{

    function add()
    {
        $room = C('ROOM');
        $this->assign('room', $room);

        $this->display();
    }

    function addOK()
    {
        if(IS_POST){
            $subject = D('Subject');

            $subject -> title = I('post.title');
            $subject -> room = I('post.room');
            $subject -> remark = I('post.remark');

            if($subject->add()){
                $this -> success('添加成功', 'index');
            }else{
                $this -> error('添加失败', 'add');
            }
        }
    }

    function index()
    {
        $subject = D('Subject');
        $data = $subject -> select();
        $this->assign('data', $data);
        $this->display('list');
    }

    function delete()
    {
        if(IS_POST){

            $id = I('post.id');
            $ids = implode(",", $id);

            $subject = D('Subject');
            if($subject->delete($ids)){
                $this->success('删除成功','index');
            }else{
                $this->error('删除失败','index');
            }

        }
    }

    function edit($id)
    {
        $room = C('ROOM');
        $this->assign('room', $room);

        $subject = D('Subject');
        $result = $subject -> find($id);
        $this->assign('result', $result);
        $this->display();

    }

    function editOK($id)
    {
        if(IS_POST){
            $subject = D('Subject');
            $subject -> title = I('post.title');
            $subject -> room = I('post.room');
            $subject -> remark = I('post.remark');

            $subject -> id = I('post.id');
            if ($subject->save()) {
                $this->success('更新成功', 'index');
            }else{
                $this->error('更新失败', 'index');
            }
        }
    }
}