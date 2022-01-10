<?php
class Product {
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function calcDay() {
        $d=strtotime("+5 day");
        return date("Y-m-d h:i:sa", $d);
    }
}
?>