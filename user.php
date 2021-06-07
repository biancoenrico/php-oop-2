<?php

class User {
    public $name;

    public $lastname;

    protected $products = [];

    public function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getPrintableProducts() {
        $printable_array = [];

        foreach($this->products as $product) {
            $printable_array[] = $product->getInfoData();
        }

        return $printable_array;
    }
}

?> 