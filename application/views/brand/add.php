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
                            <form class="col-md-10" action="<?php echo base_url('products/add_brand') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <h4> Add Brand </h4>
                                <div class="row">
                                    <div class="col-lg col-md">
                                        <div class="card card-primary">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nama Brand*</label>
                                                    <input type="text" class="form-control" required="" name="nama_brand">
                                                    <div class=" invalid-feedback">
                                                        Opps! Brand Name
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="image_brand" class="custom-file-input" id="foto">
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