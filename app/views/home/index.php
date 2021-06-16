<!-- Start Banner Hero -->
    <?php

    $product = $data['produk'];
    $category = $data['kategori'];

    ?>
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= BASEURL; ?>/img/product/lampuGantung.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Lampu Gantung</h1>
                                <h3 class="h2">kerajinan tangan dari kardus bekas</h3>
                                <p>
                                    Kerajinan ini adalah hasil karya masyarakat desa binaan di daerah Bangsalsari Jember. 
                                    Selain hasil kerajinan yang menarik, hasil kerajinan ini diharapkan agar bisa mengurangi <strong>sampah</strong> kardus bekas yang ada di Desa Bangsalsari
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= BASEURL; ?>/img/product/Gelang dari Kerang.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Gelang Re use</h1>
                                <h3 class="h2">kerajinan dari biota laut</h3>
                                <p>
                                    Kerajinan yang berasal dari masyarakat pesisir pantai watu ulo untuk oleh-oleh wisatawan yang berkunjung 
                                    dengan model gelang yang kekinian dan elegan, menjadi daya tarik sendiri bagi <strong>pembeli</strong> untuk menjadikan sebuah barang koleksi yang antik dan menarik untuk dipakai.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?= BASEURL; ?>/img/product/tempat tisu lebah.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Bee Tissue Holder</h1>
                                <h3 class="h2">Kerajinan dari kain flanel</h3>
                                <p>
                                    Kerajinan dari kain flanel ini berasal dari daerah Gebang Jember. 
                                    Pengrajin mampu menyulap tempat tissu dihias dengan kain flanel mampu menghasilkan sebuah kerajinan yang kekinian dan elegan, tempat tissu ini akan sangat <strong>cocok</strong> diletakkan di ruang tamu dan ruang makan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Kategori Terpopuler</h1>
                <p>
                    Kategori yang paling populer dalam bulan ini.
                </p>
            </div>
        </div>
        <div class="row">
            <?php for($x=0; $x < 3;$x++) : ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="<?= BASEURL; ?>/shop/<?= $category[$x]["id"]; ?>"><img src="<?= BASEURL; ?>/img/product/<?=$category[$x]["picture"]?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?= $category[$x]["name"]; ?></h5>
                <p class="text-center"><a class="btn btn-success" href="<?= BASEURL; ?>/shop/<?= $category[$x]["id"]; ?>">Lihat</a></p>
            </div>
            <?php endfor; ?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Produk Terbaru</h1>
                    <p>
                        Produk berkualitas dengan harga terjangkau
                    </p>
                </div>
            </div>
            <div class="row">
                <?php for($x=0; $x < 3;$x++) : ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?= BASEURL; ?>/shop/detail/<?= $product[$x]["id"]; ?>">
                            <img src="<?= BASEURL; ?>/img/product/<?=$product[$x]["picture"]?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li class="text-muted text-right">Rp<?= $product[$x]["price"]; ?>,00</li>
                            </ul>
                            <a href="<?= BASEURL; ?>/shop/detail/<?= $product[$x]["id"]; ?>" class="h2 text-decoration-none text-dark"><?= $product[$x]["name"]; ?></a>
                            <p class="card-text"><?= $product[$x]["description"]; ?></p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->