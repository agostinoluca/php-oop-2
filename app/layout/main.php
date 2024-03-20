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