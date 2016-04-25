<?php
namespace Home\Model;

use Think\Model\RelationModel;

/**
* 
*/
class KaoqinModel extends RelationModel
{
    
    protected  $pk = 'id';
    protected $fields = array('id', 'truename', 'subject', 'addtime');

    protected $_link = array(
        'Subject' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_name' => 'subject',
            'mapping_fields' => 'title',
            'class_name' => 'Subject',
            'foreign_key' => 'subject'
        ),
    );
}