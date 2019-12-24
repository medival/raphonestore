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
                        <h5>Welcome <span class="badge badge-primary"><?= $user['name']; ?></span></h5>
                    </div>

                    <div class="section-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width=20>#</th>
                                        <th width=200>Nama</th>
                                        <th>Spesifikasi</th>
                                        <th width=150>Harga</th>
                                        <th width=20>Stock</th>
                                        <th width=20>Status</th>
                                        <th width=100>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td> Samsung Galaxy S9 </td>
                                        <td> Spesifikasi </td>
                                        <td> Rp. 5.999.000 </td>
                                        <td> 5 </td>
                                        <td> Baru </td>
                                        <td> </td>
                                    </tr>
                                </thead>
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