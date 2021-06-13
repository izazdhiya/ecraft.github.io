    <!-- Start Footer -->
    <?php

    $category = $data['kategori'];

    ?>

    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">E Craft</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Jalan Lumba-lumba 1 E 19, Kaliwates, Jember
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">081246841187</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:office@ecraft.com">office@ecraft.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Kategori</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <?php for($x=0; $x < 3;$x++) : ?>
                        <li><a class="text-decoration-none" href="<?= BASEURL; ?>/shop/<?= $category[$x]["id"]; ?>"><?= $category[$x]["name"]; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="<?= BASEURL; ?>/home">Beranda</a></li>
                        <li><a class="text-decoration-none" href="<?= BASEURL; ?>/about">Tentang Kami</a></li>
                        <li><a class="text-decoration-none" href="<?= BASEURL; ?>/shop">Toko</a></li>
                        <li><a class="text-decoration-none" href="<?= BASEURL; ?>/contact">Kontak</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a rel="nofollow" class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; E Craft 
                            | Designed by <a> izaz fiesta </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Start Script -->
    <script src="<?= BASEURL; ?>/js/jquery-1.11.0.min.js"></script>
    <script src="<?= BASEURL; ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/js/templatemo.js"></script>
    <script src="<?= BASEURL; ?>/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>