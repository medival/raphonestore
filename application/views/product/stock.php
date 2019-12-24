<!DOCTYPE html>
<html lang="en">

<head>
    <title> <?= $title; ?> </title>
    <?php $this->load->view("_partials/header.php"); ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Sidebar -->
            <?php $this->load->view("_partials/navbar.php"); ?>
            <?php $this->load->view("_partials/sidebar.php"); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <a href="<?php echo site_url('products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible show fade" role="alert">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="section-body">
                        <div class="table-responsive table-striped">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width=20>#</th>
                                        <th width=200>Nama</th>
                                        <th width=200>Gambar</th>
                                        <th width=100>Harga</th>
                                        <th width=15>Varian</th>
                                        <th width=20>Stock</th>
                                        <th width=100>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($product as $p) : ?>
                                        <tr>
                                            <td width="10">
                                                <?php echo $no; ?>
                                            </td>
                                            <td>
                                                <?php echo $p->nama_product ?>
                                            </td>
                                            <td>
                                                <div class="chocolat-parent">
                                                    <a href="<?php echo base_url('upload/product/' . $p->image_product) ?>" class=" chocolat-image" title="Just an example">
                                                        <div data-crop-image="">
                                                            <img alt="image" src="<?php echo base_url('upload/product/' . $p->image_product) ?>"" class=" img-fluid">
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php $rupiah = "Rp " . number_format($p->harga_product, 2, ',', '.'); ?>
                                                <?php echo $rupiah ?>
                                            </td>
                                            <td>
                                                <?php echo $p->varian_product ?>
                                            </td>
                                            <td>
                                                <?php echo $p->stok_product ?>
                                            </td>
                                            <td width=" 250">
                                                <a href="#" class="btn btn-light text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                                <a href="<?php echo site_url('products/edit/' . $p->id_product) ?>" class="btn btn-light text-success"><i class="fas fa-edit"></i> Edit</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('products/delete/' . $p->id_product) ?>')" href="#!" class="btn btn-light text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Foooter  -->
    <?php $this->load->view("_partials/footer.php"); ?>
    </div>
    </div>
    <?php $this->load->view("_partials/modal.php"); ?>
    <!-- General JS Scripts -->
    <?php $this->load->view("_partials/js.php"); ?>
</body>
<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

</html>