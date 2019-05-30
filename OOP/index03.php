<?php
class Person{
    protected $name = 'Parent'; 
    public $age;
    private $height = 180;

    protected function getName(){
        return $this->name;
    }
    function getHeight(){
        return $this->height;
    }
}
class Student extends Person{
    
    public function getName(){
        return $this->name;
    }
}
$s = new Student;
print_r($s);die;
// echo $s->name;// false
echo $s->getName();