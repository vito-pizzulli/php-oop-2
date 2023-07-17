<?php
    class Product {
        public $title;
        public $price;
        public $description;
        public $barcode;
        public $brand;
        public $rating;
        public $imageUrl;
        public $animalType;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl, String $animalType) {
            $this->title = $title;
            $this->price = $price;
            $this->description = $description;
            $this->barcode = $barcode;
            $this->brand = $brand;
            $this->rating = $rating;
            $this->imageUrl = $imageUrl;
            $this->animalType = $animalType;
        }
    }
?>