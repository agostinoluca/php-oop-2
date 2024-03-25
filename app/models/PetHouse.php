<?php

class PetHouse extends Product
{
    public string $size;

    public function __construct(string $productName, int $price,  string $image, string $productCategory, string $petsCategory, string $size)
    {
        parent::__construct($productName,   $price,   $image,   $productCategory,   $petsCategory);
        $this->size = $size;
    }
}
