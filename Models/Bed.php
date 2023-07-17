<?php
    include_once __DIR__ . '/ColorAndMaterial.php';
    class Bed extends Product {
        use ColorAndMaterial;
        public $size;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl,   String $animalType, String $category, String $color, String $material, String $size) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $imageUrl, $animalType, $category);
            $this->color = $color;
            $this->material = $material;
            $this->size = $size;
        }
    }
?>