<?php

/**
* 
*/
class StudentModel {
    
    private $name;
    private $age;
    private $address;

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function add(){
        $sql = "insert into student values ( '$this->name', $this->age, '$this->address' )";
        echo $sql;
    }
}

$student = new StudentModel();
$student -> name = 'xiaomei';
$student -> age = 32;
$student -> address = 'xiaomei';
$student -> add();

