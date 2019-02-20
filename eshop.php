<?php

abstract class Good extends AnyGood implements sellable, returnable {
    use Discount;
    public function __construct()
    {
        $this->price = rand(0, 100);
    }

    public function returnGood()
    {
        echo 'NO RETURNS IN OUR SHOP';
    }
}

interface returnable {
    public function returnGood();
}

interface sellable {
    public function sell($price);
}



class Car extends Good {
    public function __construct()
    {
        parent::__construct();
        $this->price = $this->price * 1000;
    }

    public function sell($price)
    {
        echo "SOLD WITH PRICE".$price;
    }
}

class Cat extends Good {
    public function __construct()
    {
        parent::__construct();
        $this->price = $this->price * 10;
    }

    public function sell($price)
    {
        echo "sold";
    }
}

abstract class AnyGood {
    public $price;
}


trait Discount {
    public function makeDiscount()
    {
        $this->price = $this->price - ($this->price * 0.1);
    }
}

$a = rand(0, 1);
$arr = ['Car', 'Cat'];
$good = new $arr[$a]();
echo $good->price.PHP_EOL;
$good->makeDiscount();
echo $good->price.PHP_EOL;

echo $good->sell($good->price);

$type = 'category';
interface saveable {
    public function save();
}
class CategoryContent implements saveable {
    public function save()
    {
        //
    }
}
$var = strtoupper($type).'Content';
$obj = new $var;
var_dump($obj);