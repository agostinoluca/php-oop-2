<?php

require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . '/PetHouse.php';
class Product
{
    public string $productName;
    public int $price;
    public string $image;
    public string $productCategory;
    public string $petsCategory;

    public function __construct(string $productName, int $price, string $image, string $productCategory, string $petsCategory)
    {
        $this->productName = $productName;
        $this->price = $price;
        $this->image = $image;
        $this->productCategory = $productCategory;
        $this->petsCategory = $petsCategory;
    }
};
