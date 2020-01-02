<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/cart_styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/cart_responsive.css') ?>">
    <link rel="stylesheet" href="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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

            <div class="main-content container">

                <section class="section">
                    <div class="section-body">
                        <h2> Checkout </h2>
                        <div class="cart_items">
                            <ul class="cart_list">
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="<?php echo base_url('upload/product/' . $product->image_product) ?>" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Name</div>
                                            <div class="cart_item_text"><?= $product->nama_product ?></div>
                                        </div>
                                        <div class="cart_item_color cart_info_col">
                                            <div class="cart_item_title">Color</div>
                                            <div class="cart_item_text"><?= $product->varian_product; ?></div>
                                        </div>
                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Quantity</div>
                                            <div class="cart_item_text"><?= $qty ?></div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Price</div>
                                            <div class="cart_item_text">Rp <?= number_format($product->harga_product, 0, ',', '.'); ?></div>
                                        </div>

                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Total</div>
                                            <div class="cart_item_text">
                                                <?php $total = $qty *  $product->harga_product; ?>
                                                <?= 'Rp ' . number_format($total, 0, ',', '.'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order_total">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">Order Total:</div>
                                    <div class="order_total_amount"><?= 'Rp ' . number_format($total, 0, ',', '.'); ?></div>
                                </div>
                                <div class="row float-right mt-4">
                                    <button type="button" class="button cart_button_checkout" onclick="sweet()"> Payment </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="footer mt-5 mb-2"></div>
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
    </div>
    <?php $this->load->view('visit/_partials/js'); ?>

    <script>
        function sweet() {
            swal("Your order has complete", "Thanks for purchasing at Raphonestore", "success");
        }
    </script>
</body>

</html>