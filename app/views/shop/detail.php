<!-- Open Content -->
    
    <?php

    $product = $data['produk'];
    $category = $data['kategori'];
    $categoryname = $data['setkategori'];

    ?>

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?= BASEURL; ?>/img/<?=$product["picture"]?>" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?= $product["name"]; ?></h1>
                            <p class="h3 py-2">Rp<?= $product["price"]; ?>,00</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?= $product["brand"]; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p><?= $product["description"]; ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kategori :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?= $categoryname["name"]; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <?= $product["spesification"]; ?>
                            </ul>

                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a href='https://api.whatsapp.com/send?phone=6282133371248' class="btn btn-success btn-lg" >Buy</a>
                                    </div>
                                </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->