<?php
    class Toy extends Product {
        public $material;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl, String $material) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $imageUrl);
            $this->material = $material;
        }
    }
?>