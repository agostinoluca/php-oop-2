<?php
class Product
{
    public function __construct(public string $productName, public int $price, public string $image, public string $productCategory, public string $petsCategory)
    {
    }
};
