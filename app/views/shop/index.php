<!-- Start Content -->
    
    <?php

    $product = $data['produk'];
    $category = $data['kategori'];

    ?>

    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Kategori</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <?php foreach($category as $row) : ?>
                    <li class="pb-3">
                        <a class="h3 text-decoration-none text-dark" href="<?= BASEURL; ?>/shop/<?= $row["id"]; ?>"><?= $row["name"]; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 pb-4">
                    </div>
                </div>
                <div class="row">

                    <?php foreach($product as $row) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?= BASEURL; ?>/img/<?=$row["picture"]; ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="<?= BASEURL; ?>/shop/detail/<?= $row["id"]; ?>"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?= BASEURL; ?>/shop/detail/<?= $row["id"]; ?>" class="h3 text-decoration-none"><?= $row["name"]; ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>Kategori : <?= $category[($row["category"])-1]['name']; ?></li>
                                </ul>
                                
                                <p class="text-center mb-0">Rp<?= $row["price"]; ?>,00</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
    <!-- End Content -->