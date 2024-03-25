<?php

class Food extends Product
{
    public string $expiration;

    public function __construct(string $productName, int $price,  string $image, string $productCategory, string $petsCategory, string $expiration)
    {
        parent::__construct($productName,   $price,   $image,   $productCategory,   $petsCategory);
        $this->expiration = $expiration;
    }
}
