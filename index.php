<?php

class Product
{
    public function __construct(public string $productName, public int $price, public string $image, public string $productCategory, public string $petsCategory)
    {
    }
};


$dbPetStore = [
    new Product('Meat', 125, 'https://arcaplanet.vtexassets.com/arquivos/ids/274071/PT.01.jpg?v=637955408913800000', 'Food', 'Cats'),
    new Product('Meat', 109, 'https://arcaplanet.vtexassets.com/arquivos/ids/280403/expecial-cane-bocconcini-agnello-e-tacchino.jpg?v=638115354945170000', 'Food', 'Dogs'),
    new Product('Fish Treats', 99, 'https://arcaplanet.vtexassets.com/arquivos/ids/273817/purina-felix-party-mix-ocean-mix.jpg?v=637951294030530000', 'Food', 'Cats'),
    new Product('Chicken Biscuits', 79, 'https://arcaplanet.vtexassets.com/arquivos/ids/245758/hi-chicken-cane-snack-cuoricini-pollo.jpg?v=637455025485130000', 'Food', 'Dogs'),
    new Product('Feather Toy', 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/223739/kong-gatto-feather-teaser.jpg?v=637454735282000000', 'Toy', 'Cats'),
    new Product('Rubber Chew Toy', 12, 'https://arcaplanet.vtexassets.com/arquivos/ids/294735/Playology-Cane-Gioco-Osso-Aroma-Manzo-10169592.jpg?v=638433529078000000', 'Toy', 'Dogs'),
    new Product('Cat Bed', 49, 'https://arcaplanet.vtexassets.com/arquivos/ids/265702/PHO_PRO_CAT_CLIP_49920-01-49923-1_-SALL_-APRKU_-V1.jpg?v=637737941822300000', 'Bed', 'Cats'),
    new Product('Dog House', 199, 'https://arcaplanet.vtexassets.com/arquivos/ids/251868/p-a-y--canile-eco-lodge-medium.jpg?v=637455080760330000', 'Bed', 'Dogs'),
];


require_once __DIR__ . '/app/layout/head.php';
?>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($dbPetStore as $product) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <div class="p-3">
                            <img class="card-img-top" src="<?= $product->image ?>" alt="<?= $product->productName ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->productName ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted "><?= $product->price ?>$</h6>
                        </div>
                        <div class="card-footer">
                            <h6><?= $product->productCategory ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php include_once __DIR__ . '/app/layout/bs_js_library.php' ?>
</body>

</html>