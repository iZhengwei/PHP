<?php
namespace Home\Model;
use Think\Model;

/**
* 
*/
class StudentModel extends Model
{

    protected $tableName = 'students';

    protected $pk = 'id';
    protected $fields = array('id','username','password','gender','age','addtime','tel','address','truename','remark','subject');
    
    protected $_map = array(
        'user' => 'username',
        'pwd' => 'password',
        'name' => 'truename'
        );
}