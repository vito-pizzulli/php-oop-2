<?php
    class Product {
        public $title;
        public $price;
        public $description;
        public $barcode;
        public $imageUrl;

        function __construct(String $title, Float $price, String $description, String $barcode, String $imageUrl) {
            $this->title = $title;
            $this->price = $price;
            $this->description = $description;
            $this->barcode = $barcode;
            $this->imageUrl = $imageUrl;
        }
    }
?>