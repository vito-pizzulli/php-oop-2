<?php
    class Food extends Product {
        public $type;
        public $taste;
        public $ingredients;
        public $nutritional_values;

        function __construct(String $title, Float $price, String $imageUrl, String $type, String $taste, String $ingredients, String $nutritionalValues) {
            parent::__construct($title, $price, $imageUrl);
            $this->type = $type;
            $this->taste = $taste;
            $this->ingredients = $ingredients;
            $this->nutritionalValues = $nutritionalValues;
        }
    }
?>