<?php

class Toy extends Product
{
    public string $material;

    public function __construct(string $productName, int $price,  string $image, string $productCategory, string $petsCategory, string $material)
    {
        parent::__construct($productName,   $price,   $image,   $productCategory,   $petsCategory);
        $this->material = $material;
    }
}
