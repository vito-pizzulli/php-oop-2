<?php
    class Toy extends Product {
        public $material;
        public static $category = "Gioco";

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $animalType, String $imageUrl, String $material) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $animalType, $imageUrl);
            $this->material = $material;
        }
    }
?>