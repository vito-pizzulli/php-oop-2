<?php
    include_once __DIR__ . '/ColorAndMaterial.php';
    class Toy extends Product {
        use ColorAndMaterial;
        public static $category = "Gioco";

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $animalType, String $imageUrl, String $color, String $material) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $animalType, $imageUrl);
            $this->color = $color;
            $this->material = $material;
        }
    }
?>