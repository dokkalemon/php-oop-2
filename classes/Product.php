<?php
class Product {
    protected $name;
    protected $price;
    protected $shipment;
    protected $discount;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}
?>