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
                        <a href="<?php echo site_url('products/stock_brand') ?>"><i class="fas fa-arrow-left"></i> Back</a>
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
                            <form class="col-md-10" action="<?php echo base_url('products/update_brand') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <h4> Add Brand </h4>
                                <div class="row">
                                    <div class="col-lg col-md">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="id_brand" value="<?php echo $brand->id_brand ?>">
                                                    <label>Nama *</label>
                                                    <input type="text" class="form-control" required="" name="nama_brand" value="<?= $brand->nama_brand; ?>">
                                                    <div class=" invalid-feedback">
                                                        Opps! brand name
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="old_image" value="<?php echo $brand->image_brand ?>" />
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <div class="card-header-action">
                                                            brand Image :
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="chocolat-parent">
                                                            <a href="<?php echo base_url('upload/brand/' . $brand->image_brand) ?>" class="chocolat-image">
                                                                <div data-crop-image="">
                                                                    <img alt="image" src="<?php echo base_url('upload/brand/' . $brand->image_brand) ?>" class="img-fluid">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image_brand" class="custom-file-input" id="foto" value="">
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