<?php
    include_once __DIR__ . '/ColorAndMaterial.php';
    class Toy extends Product {
        use ColorAndMaterial;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl,   String $animalType, String $color, String $material) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $imageUrl, $animalType);
            $this->color = $color;
            $this->material = $material;
        }
    }
?>