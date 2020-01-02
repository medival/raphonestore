<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/product_styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/product_responsive.css') ?>">
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
    <style>
        .list-unstyled li {
            line-height: 2rem;
        }

        .list-unstyled a:hover {
            text-decoration: none;
        }

        .keterangan .row {
            margin-top: 1rem;
        }

        .keterangan .row p {
            line-height: 2rem;
        }
    </style>
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper">

            <?php $this->load->view('visit/_partials/navbar'); ?>
            <!-- Main Content -->
            <div class="main-content">

                <section class="section container">
                    <div class="section-header">
                        <h1> Details Item <?= $product->nama_product ?> </h1>
                        <div class="section-header-breadcrumb">
                        </div>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <!-- Selected Image -->
                            <div class="col-lg-5 order-lg-2 order-1">
                                <div class="image_selected"><img src="<?php echo base_url('upload/product/' . $product->image_product) ?>" alt=""></div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-5 order-3">
                                <div class="product_description">
                                    <div class="product_category">Smartphone</div>
                                    <div class="product_name"><?= $product->nama_product ?></div>
                                    <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                    <div class="product_text">
                                        <?= $product->spesifikasi_product ?>
                                    </div>
                                    <div class="order_info d-flex flex-row">
                                        <form action="<?php echo base_url('site/order') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                            <div class="clearfix">
                                                <div class="">
                                                    <input type="hidden" name="id_product" id="" class="form-control" value="<?= $product->id_product ?>">
                                                    <input type="hidden" name="nama_product" id="" class="form-control" value="<?= $product->nama_product ?>">
                                                    <input type="hidden" name="spesifikasi_product" id="" class="form-control" value="<?= $product->spesifikasi_product ?>">
                                                    <input type="hidden" name="harga_product" id="" class="form-control" value="<?= $product->harga_product ?>">
                                                    <input type="hidden" name="varian_product" id="" class="form-control" value="<?= $product->varian_product ?>">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label for="">Quantity </label>
                                                                <select class="form-control" name="qty">
                                                                    <?php
                                                                    for ($i = 1; $i <= $product->stok_product; $i++) {
                                                                        echo "<option value=$i>$i</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="">Stock </label>
                                                            <input type="number" readonly name="stok" class="form-control" pattern="[0-9]*" value="<?= $product->stok_product ?>" required>
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="">Color </label>
                                                            <input readonly type="text" name="" id="" class="form-control" value="<?= $product->varian_product ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_price"> <?= "Rp " . number_format($product->harga_product, 2, ',', '.'); ?></div>
                                            <div class="button_container">
                                                <button type="submit" class="button cart_button">Add to Cart</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="footer mb-2"></div>
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">
                            <!-- Content -->
                            <h5 class="text-uppercase text-bold mb-3"> RAPHONESTORE </h5>
                            <b> Got Question? Call Us</b>
                            <div class="mt-3"></div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php $this->load->view('visit/_partials/footer'); ?>
        </div>
        <?php $this->load->view('visit/_partials/js'); ?>
    </div>
</body>
</body>

</html>