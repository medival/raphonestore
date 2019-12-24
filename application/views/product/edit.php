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
                        <a href="<?php echo site_url('products/stock') ?>"><i class="fas fa-arrow-left"></i> Back</a>
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
                            <form class="col-md-10" action="<?php echo base_url('products/update_form') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <h4> Add Product </h4>
                                <div class="row">
                                    <div class="col-lg col-md">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="id_product" value="<?php echo $product->id_product ?>">
                                                    <label>Nama *</label>
                                                    <input type="text" class="form-control" required="" name="nama_product" value="<?= $product->nama_product; ?>">
                                                    <div class=" invalid-feedback">
                                                        Opps! Product name
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Spesifikasi *</label>
                                                    <textarea id="summernote" class="form-control summernote" name="spesifikasi_product" style="height: 100px"> <?php echo $product->spesifikasi_product ?></textarea>
                                                    <div class=" invalid-feedback">
                                                        Opps! Spesifikasi
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-5">
                                                        <label>Harga *</label>
                                                        <div class="input-group mb-3 ">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="harga_product" value="<?php echo $product->harga_product ?>">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                        <div class=" invalid-feedback">
                                                            Harga
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label>Varian *</label>
                                                        <input type="text" class="form-control" required="" name="variasi_product" value="<?php echo $product->varian_product ?>">
                                                        <div class=" invalid-feedback">
                                                            Opps! Varian diperlukan
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label>Stock *</label>
                                                        <input type="text" class="form-control" required="" name="stok_product" value="<?= $product->stok_product ?>">
                                                        <div class=" invalid-feedback">
                                                            Opps! Stock masih kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="old_image" value="<?php echo $product->image_product ?>" />
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <div class="card-header-action">
                                                            Product Image :
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="chocolat-parent">
                                                            <a href="<?php echo base_url('upload/product/' . $product->image_product) ?>" class="chocolat-image">
                                                                <div data-crop-image="">
                                                                    <img alt="image" src="<?php echo base_url('upload/product/' . $product->image_product) ?>" class="img-fluid">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image_product" class="custom-file-input" id="foto" value="">
                                                    <label class="custom-file-label">Choose File</label>
                                                </div>
                                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </section>
            </div>

            <!-- Foooter  -->
            <?php $this->load->view("/_partials/footer.php"); ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <?php $this->load->view("/_partials/js.php"); ?>
</body>

</html>