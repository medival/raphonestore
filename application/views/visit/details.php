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
                                            <div class="clearfix" style="z-index: 1000;">
                                                <div class="row">
                                                    <input type="hidden" name="id_product" id="" class="form-control" value="<?= $product->id_product ?>">
                                                    <div class="col-4">
                                                        <label for="">Quantity </label>
                                                        <input type="number" name="qty" id="" class="form-control" pattern="[0-9]*" value="" required>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">Stock </label>
                                                        <input type="number" readonly name="stok" id="" class="form-control" pattern="[0-9]*" value="<?= $product->stok_product ?>" required>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="">Color </label>
                                                        <input readonly type="text" name="" id="" class="form-control" value="<?= $product->varian_product ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product_price"> <?= "Rp " . number_format($product->harga_product, 2, ',', '.'); ?></div>
                                            <!-- <div class="row">
                                                <button type="submit" class="btn btn-icon  icon-left btn-primary"> <i class="fas fa-shopping-cart"></i> Order now </button>
                                            </div> -->
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
        </div>
        <?php $this->load->view('visit/_partials/js'); ?>
    </div>
</body>
</body>

</html>