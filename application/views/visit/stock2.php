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

                <section class="section">
                    <div class="section-header">
                        <h1> Daftar Smartphone </h1>
                        <div class="section-header-breadcrumb">
                        </div>
                    </div>

                    <div class="section-body">

                        <div class="row">

                        </div>
                        <div class="row">
                            <?php $no = 1; ?>
                            <?php foreach ($product as $p) : ?>
                                <div class="col-3 ">
                                    <article class="article article-style-c ">
                                        <div class="article-header">
                                            <img alt="image" src="<?php echo base_url('upload/product/' . $p->image_product) ?>" class=" img-fluid">
                                        </div>
                                        <div class="title text-center mt-2 text-bold">
                                            <?php echo $p->nama_product ?>
                                        </div>
                                        <div class="price text-small text-center mt-3 mb-2">
                                            <?php $rupiah = "Rp " . number_format($p->harga_product, 2, ',', '.'); ?>
                                            <h6> <?php echo $rupiah ?></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 text-right"> Varian : <?php echo $p->varian_product; ?></div>
                                            <div class="col-6 text-left"> Stock <span class="badge badge-info"><?php echo $p->stok_product; ?></span></div>
                                        </div>
                                        <div class="row container mt-3">
                                            <form action="<?php site_url('products/order') ?>">
                                                <div class="form-group row ">
                                                    <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Qty </label> -->
                                                    <div class="col-sm-12 col-md-7 mx-auto">
                                                        <input type="number" class="form-control" name="qty" placeholder="Quantity">
                                                        <input type="hidden" class="form-control" name="qty" value="<?php echo $p->id_product ?>">
                                                    </div>
                                                </div>
                                                <button class="btn btn-icon mb-3  icon-left btn-primary button-cart"> <i class="fas fa-shopping-cart"></i> Order now </button>
                                                <!-- <a href="<?php echo site_url('products/order/' . $p->id_product . '/qty') ?>" class="btn btn-icon mb-3  icon-left btn-primary button-cart"><i class="fas fa-shopping-cart"></i> Order Now </a> -->
                                            </form>
                                        </div>
                                        <div class="footer mb-2"></div>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            This is card footer
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    <div class="container">
        <?php $this->load->view('visit/_partials/footer'); ?>
    </div>

    <?php $this->load->view('visit/_partials/js'); ?>

</body>

</html>