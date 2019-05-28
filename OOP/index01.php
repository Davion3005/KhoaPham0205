<?php
class Product{
    //property
    protected $id;
    protected $name = 'iPhone';
    protected $price;
    protected $desc;
    protected $image;

    function __construct(int $id, string $name, float $price, string $desc, string $image){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->image = $image;
    }

    // function 
    function setName(string $txtName){
        $this->name = $txtName;
    }
    function getName(){
        return $this->name;
    }

}

$product = new Product; // obj
// $product->__construct();

// $product->name = 'Macbook';
// $product->setName('Samsung');
// echo $product->getName();
// print_r($product);



// $product02 = [
//     'name'=>'Mac',
//     'price'=>null
// ];
// echo $product02['name'];
// print_r($product02);


?>