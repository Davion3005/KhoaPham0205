<?php
/**
 * Xây dựng class Person
 * tạo 2 thuộc tính name, age
 * Tạo ra đối tượng
 * So sánh tuổi của 2 đối tượng
 */

class Person{
    private $name;
    private $age;

    function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;   
    }
    static function compare(Person $person1, Person $person2){
        if($person1->age > $person2->age)
            echo $person1->name.' lớn hơn '. $person2->name;
        elseif($person1->age == $person2->age)
            echo $person1->name.' bằng tuổi với '. $person2->name;
        else echo $person1->name.' bé hơn '. $person2->name;
    }
}
$boy = new Person('Nam', 20);
$girl = new Person('Nữ', 20);
Person::compare($girl, $boy);


?>