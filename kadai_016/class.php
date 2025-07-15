<?php

class Food {
    
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;     // 名前を代入
        $this->price = $price;   // 価格を代入
    }
    
    public function show_price() {
        echo $this->price;
    }
}


class Animal {
    
    public $name;
    public $height;
    public $weight;

    
    public function __construct($name, $height, $weight) {
        $this->name = $name;       // 名前を代入
        $this->height = $height;   // 身長を代入
        $this->weight = $weight;   // 体重を代入
    }

    
    public function show_height() {
        echo $this->height;
    }
}

$banana = new Food("バナナ", 120);
$banana->show_price();


$cat = new Animal("タマ", 25, 4.5);
$cat->show_height();      

?>