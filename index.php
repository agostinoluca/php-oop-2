<?php

class Product
{
    public function __construct(protected string $productName, protected int $price, protected string $image, protected string $productCategory, protected string $petsCategory)
    {
        $this->productName = $productName;
        $this->price = $price;
        $this->image = $image;
        $this->productCategory = $productCategory;
        $this->petsCategory = $petsCategory;
    }
};
$classTest = new Product('Cuccia', 122, 99, 'Utility', 'Dog');
var_dump($classTest);


require_once __DIR__ . '/app/layout/head.php';
?>

<body>

    <?php include_once __DIR__ . '/app/layout/bs_js_library.php' ?>
</body>

</html>