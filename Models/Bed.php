<?php
    include_once __DIR__ . '/ColorAndMaterial.php';
    class Bed extends Product {
        use ColorAndMaterial;
        public $size;
        public static $category = "Cuccia";

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $animalType, String $imageUrl, String $color, String $material, String $size) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $animalType, $imageUrl);
            $this->color = $color;
            $this->material = $material;
            $this->size = $size;
        }
    }
?>