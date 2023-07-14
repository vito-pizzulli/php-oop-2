<?php
    class Product {
        public $title;
        public $price;
        public $imageUrl;

        function __construct(String $title, Float $price, String $imageUrl) {
            $this->title = $title;
            $this->price = $price;
            $this->imageUrl = $imageUrl;
        }
    }
?>