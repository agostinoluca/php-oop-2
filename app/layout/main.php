<main>
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
                            <h6 class="card-subtitle mb-2 text-muted ">Price: <?= $product->price ?>$</h6>
                        </div>
                        <div class="card-footer d-flex justify-content-between ">
                            <div class="product_info">
                                <h6>Category: <?= $product->productCategory ?></h6>
                                <?php if (get_class($product) == 'Toy') { ?>
                                    <h6>Material: <?= $product->material ?></h6>
                                <?php } ?>
                                <?php if (get_class($product) == 'Food') { ?>
                                    <h6>Expiration: <?= $product->expiration ?></h6>
                                <?php } ?>
                                <?php if (get_class($product) == 'PetHouse') { ?>
                                    <h6>Size: <?= $product->size ?></h6>
                                <?php } ?>
                            </div>
                            <div class="pet_icon fs-1">
                                <?php if ($product->petsCategory == 'Dogs') { ?>
                                    <i class="fa-solid fa-dog text-success "></i>
                                <?php } ?>
                                <?php if ($product->petsCategory == 'Cats') { ?>
                                    <i class="fa-solid fa-cat text-warning"></i>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>