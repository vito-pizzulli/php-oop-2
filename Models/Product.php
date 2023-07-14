<?php
    class Product {
        public $title;
        public $price;
        public $description;
        public $imageUrl;

        function __construct(String $title, Float $price, String $description, String $imageUrl) {
            $this->title = $title;
            $this->price = $price;
            $this->description = $description;
            $this->imageUrl = $imageUrl;
        }
    }
?>