<?php
namespace Home\Controller;

/**
* 
*/
class InfoController extends CommonController
{
    
    function add()
    {
        $this->display();
    }

    function addOk()
    {
        if(IS_POST){
            $info = M('Info');
            $data = $info -> create();

            if($_FILES['file']['size'] > 0){

                $upload = new \Think\Upload();

                $upload -> maxSize = 2097152;
                $upload -> rootPath = './Uploads/';
                if($row = $upload -> upload()){
                    //dump($row);
                    $filepath = $row['file']['savepath'].$row['file']['savename'];
                    $data['filepath'] = $filepath;
                }else{
                    $this->error($upload->getError(), 'add');
                }

            }

            $data['addtime'] = time();
            if($info -> add($data)){
                $this -> success('添加成功', 'index');
            }else{
                $this -> error('添加失败', 'add');
            }
        }
    }

    function index()
    {
        $info = D('Info');
        $count = $info -> count();
        $page = new \Think\Page($count, 15);
        $show = $page->show();
        $data = $info -> limit($page -> firstRow, $page -> listRows) -> select();
        $this -> assign('data', $data);
        $this -> assign('page', $show);
        $this->display('list');
    }

    function download($id){
        $info = M('Info');
        $row = $info -> field('filepath') -> find($id);

        $file = "./Uploads/{$row['filepath']}";
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="'. basename($file) .'"');
        header("Content-Length:". filesize($file));
        readfile($file);
    }
}