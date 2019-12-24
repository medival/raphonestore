<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/cart_styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets_onetech/css/cart_responsive.css') ?>">
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
                                    <button type="button" class="button cart_button_checkout"> Payment </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container">
            <?php $this->load->view('visit/_partials/footer'); ?>
        </div>
    </div>
    <?php $this->load->view('visit/_partials/js'); ?>

</body>

</html>