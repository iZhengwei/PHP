<?php
namespace Home\Model;
use Think\Model;

/**
* 
*/
class SubjectModel extends Model
{
    protected $pk = 'id';
    protected $fields = array('id','title','room','remark');

    // protected $_map = array(
    //     'name' => 'title',
    //     'add' => 'room'
    // );
    
    
}