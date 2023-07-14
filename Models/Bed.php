<?php
    class Bed extends Product {
        public $material;
        public $size;

        function __construct(String $title, Float $price, String $description, String $barcode, String $brand, Float $rating, String $imageUrl, String $material, String $size) {
            parent::__construct($title, $price, $description, $barcode, $brand, $rating, $imageUrl);
            $this->material = $material;
            $this->size = $size;
        }
    }
?>