<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("/_partials/header.php"); ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php $this->load->view("/_partials/navbar.php"); ?>

            <!-- Sidebar -->
            <?php $this->load->view("/_partials/sidebar.php"); ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <a href="<?php echo site_url('stisla/overview') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="section-body">
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible show fade" role="alert">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
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
                                                    <?php $total = $qty * $product->harga_product; ?>
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
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                </section>
                <!-- <div class="cart_container"> -->


                <!-- Foooter  -->
                <?php $this->load->view("/_partials/footer.php"); ?>
            </div>
        </div>

        <!-- General JS Scripts -->
        <?php $this->load->view("/_partials/js.php"); ?>
</body>

</html>