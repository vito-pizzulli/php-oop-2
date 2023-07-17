<?php
    class Bed extends Product {
        public $material;
        public $size;
        public static $category = "Cuccia";

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $animalType, String $imageUrl, String $material, String $size) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $animalType, $imageUrl);
            $this->material = $material;
            $this->size = $size;
        }
    }
?>