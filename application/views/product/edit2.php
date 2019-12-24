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
                        <a href="<?php echo site_url('/home') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="section-body">
                        <div class="card-body">
                            <form class="col-md-10" action="<?php echo base_url('products/update_form') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <h4> Add Product </h4>
                                <div class="row">
                                    <div class="col-lg col-md">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="id_product" value="<?php set_value('id_product') ?>">
                                                    <label>Nama *</label>
                                                    <input type="text" class="form-control" required="" name="nama_product" value="<<?php set_value('nama_product') ?>">
                                                    <div class=" invalid-feedback">
                                                        Opps! Product name
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Spesifikasi *</label>
                                                    <textarea class="form-control" required name="spesifikasi_product" style="height: 100px"><?php set_value('spesifikasi_product') ?></textarea>
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
                                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga_product" value="<?php set_value('harga_product') ?>">
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
                                                        <input type="text" class="form-control" required="" name="varian_product" value="<?php set_value('varian_product') ?>">
                                                        <div class=" invalid-feedback">
                                                            Opps! Varian diperlukan
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-2">
                                                        <label>Stock *</label>
                                                        <input type="text" class="form-control" required="" name="stok_product" value="<?php set_value('stok_product') ?>">
                                                        <div class=" invalid-feedback">
                                                            Opps! Stock masih kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image_product" class="custom-file-input" id="foto">
                                                    <label class="custom-file-label">Choose File</label>
                                                </div>
                                                <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="name"> Foto </label>
                                    <input class="form-control-file " type="file" name="image" />
                                    <div class="invalid-feedback">
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <label>NISN</label>
                                    <input type="number" class="form-control">
                                    <div class="invalid-feedback">
                                        Opps Field NISN diperlukan
                                    </div>
                                </div> -->
                                <!-- <div class="form-group mb-0">
                                    <label>No. Telefon</label>
                                    <textarea class="form-control" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Opps! No Telefon terlupakan
                                    </div>
                                </div> -->
                                <!-- </div> -->
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