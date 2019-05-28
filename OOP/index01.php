<?php
class Product{
    //property
    protected $id = 1;
    protected $name = 'iPhone';
    protected $price;
    protected $desc;
    protected $image;
    
    function __construct(
        int $id = 1,
        string $name = 'A',
        float $price= 0,
        string $desc = '',
        string $image= ''
    ){
        echo '<pre>';
        echo __FUNCTION__. ' duoc khoi tao';
        echo '<br>';
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

    function __destruct(){
        echo __FUNCTION__. ' da bi huy';
        // unset($id);
        // $id = null;
    }

}

$product = new Product(1, 'iPhone', 20, 'Mo ta', 'a.png'); // obj
// $product = new Product;
// $product->__construct(1, 'iPhone', 20, 'Mo ta', 'a.png');

// $product->name = 'Macbook';
// $product->setName('Samsung');
// echo $product->getName();
print_r($product);
$product->setName('Samsung');
echo $product->getName();
print_r($product);

// $product02 = [
//     'name'=>'Mac',
//     'price'=>null
// ];
// echo $product02['name'];
// print_r($product02);


?>