<?php
class Person{
    // public $name = 'Parent';
    const name = 'Parent'; 
    public $age;

    function getName(){
        return $this::name;
    }
}
class Student extends Person{
    public $name = 'Son';
    public $height;

    function getNameParent(){
        return parent::name;
    }
    function getName(){
        return $this->name;
    }
    function getData(){
        return self::getName(); // student
        // return parent::getName(); // person
    }
}
$student = new Student;
echo $student->getData();
// echo $student->name;
// echo $student->getNameParent();
// print_r($student);

?>