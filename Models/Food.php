<?php
    class Food extends Product {
        public $type;
        public $taste;
        public $ingredients;
        public $nutritionalValues;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl,   String $animalType, String $type, String $taste, String $ingredients, String $nutritionalValues) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $imageUrl, $animalType);
            $this->type = $type;
            $this->taste = $taste;
            $this->ingredients = $ingredients;
            $this->nutritionalValues = $nutritionalValues;
        }
    }
?>