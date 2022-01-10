<?php

require_once __DIR__ . '/Product.php';

class Premium extends Product {
    public $color;
    public $relatedArticles;

    public function __construct($name, $price, $category, $color, $relatedArticles) {
        parent::__construct($name, $price, $category);

        $this->color = $color;
        $this->relatedArticles = $relatedArticles;
    }

    public function calcDay() {
        $d=strtotime("tomorrow");
        return date("Y-m-d h:i:sa", $d);
    }
}


?>