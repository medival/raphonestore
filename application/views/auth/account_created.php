<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('/_partials/header'); ?>
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="page-error">
                    <div class="page-inner">
                        <h2> Congrats! </h2>
                        <div class="page-description">
                            Your account is created
                        </div>
                        <br>
                        <br>
                        <div class="div">
                            <a href="<?php echo base_url('/auth') ?>" class="btn btn-success">Back to Login</a>
                        </div>
                    </div>
                </div>
                <div class="simple-footer mt-5">
                    Copyright &copy; Stisla 2018
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('/_partials/js'); ?>
</body>

</html>