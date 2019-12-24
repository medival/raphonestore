<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('visit/_partials/header'); ?>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">

            <?php $this->load->view('visit/_partials/navbar'); ?>
            <!-- Main Content -->

            <div class="main-content">
                <div class="body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner1.png') ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner2.jpeg') ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?= base_url('/assets_onetech/img/banner/banner3.jpg') ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- </div> -->
                <div class="div mt-2 mb-2"></div>
                <section class="section">
                    <div class="section-header">
                        <h1> Daftar Smartphone </h1>
                        <div class="section-header-breadcrumb">
                        </div>
                    </div>
                    <div class="section-body">

                    </div>
                    <div class="section-body">
                        <div class="row">
                            <?php $no = 1; ?>
                            <?php foreach ($product as $p) : ?>
                                <div class="col-lg-3 col-md-3 col-sm-12 ">
                                    <article class="article article-style-c ">
                                        <div class="article-header">
                                            <img alt="image" src="<?php echo base_url('upload/product/' . $p->image_product) ?>" class=" img-fluid">
                                        </div>
                                        <div class="title text-center mt-2 mb-2 text-bold">
                                            <?php echo $p->nama_product ?>
                                        </div>
                                        <div class="price text-small text-center ">
                                            <?php $rupiah = "Rp " . number_format($p->harga_product, 2, ',', '.'); ?>
                                            <h6> <?php echo $rupiah ?></h6>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="col-6 text-right"> Varian : <?php echo $p->varian_product; ?></div>
                                            <div class="col-6 text-left"> Stock <span class="badge badge-info"><?php echo $p->stok_product; ?></span></div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a href="<?php echo site_url('site/details/' . $p->id_product) ?>" class="btn btn-icon mx-1 mb-4 icon-left btn-primary button-cart"> <i class="fas fa-shopping-cart"></i> Order Now </a>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="footer mb-2"></div>
                    </div>
                    <!-- Footer Links -->
                    <div class="container-fluid text-center text-md-left">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6 mt-md-0 mt-3">

                                <!-- Content -->
                                <h5 class="text-uppercase text-bold"> RAPHONESTORE </h5>
                                <b> Got Question? Call Us</b>
                                <div class="mt-2"></div>
                                <p>Here you can use rows and columns to organize your footer content.</p>
                                <div class="row">
                                    <div class="col-1"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                                    <div class="col-1"><a href="#"><i class="fab fa-twitter"></i></a></div>
                                    <div class="col-1"><a href="#"><i class="fab fa-youtube"></i></a></div>
                                    <div class="col-1"><a href="#"><i class="fab fa-google"></i></a></div>
                                    <div class="col-1"><a href="#"><i class="fab fa-vimeo-v"></i></a></div>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <hr class="clearfix w-100 d-md-none pb-3">

                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase">Find it Fast</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!">Smartphone</a>
                                    </li>
                                    <li>
                                        <a href="#!">Tablets</a>
                                    </li>
                                    <li>
                                        <a href="#!">Accessoris</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">

                                <!-- Links -->
                                <h5 class="text-uppercase text-bold"> Customer Care</h5>

                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#!"> My Account</a>
                                    </li>
                                    <li>
                                        <a href="#!">Order Tracking</a>
                                    </li>
                                    <li>
                                        <a href="#!">Customer Services</a>
                                    </li>
                                    <li>
                                        <a href="#!"> FAQs</a>
                                    </li>
                                    <li>
                                        <a href="#!"> Product Support</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container">
        <?php $this->load->view('visit/_partials/footer'); ?>
    </div>
    </div>
    <?php $this->load->view('visit/_partials/js'); ?>

</body>

</html>

<script>
    $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 10,
    });
</script>