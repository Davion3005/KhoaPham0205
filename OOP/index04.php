<?php
/**
 * Xây dựng class Person
 * tạo 2 thuộc tính name, age
 * Tạo ra đối tượng
 * So sánh tuổi của 2 đối tượng
 */

class Person{
    public static $name = 'Noname';
    private $age;

    // function __construct(string $name='Noname', int $age=0){
    //     $this::$name = $name;
    //     $this->age = $age;   
    // }
    static function compare(Person $person1, Person $person2){
        if($person1->age > $person2->age)
            echo $person2::$name.' lớn hơn '. $person1::$name;
        elseif($person1->age == $person2->age)
            echo $person2::$name.' bằng tuổi với '. $person1::$name;
        else echo $person2::$name.' bé hơn '. $person1::$name;
    }
}

$p = new Person();
$p::$name = 'Nam';
echo $p::$name; //  Nam

$p2 = new Person();
echo $p2::$name; // Noname


$p3 = new Person();
$p3::$name = 'Nữ';
echo $p3::$name; //  Nữ


// $girl = new Person('Nữ', 21);
// $boy = new Person('Nam', 20);

// Person::compare($girl, $boy);


?>