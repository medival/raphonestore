<!DOCTYPE html>
<html lang="en">

<head>
  <title> User Registration </title>
  <?php $this->load->view("/_partials/header") ?>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-8 col-sm-8 offset-sm-2 col-md-6 offset-md-4 col-lg-6 offset-lg-3">
            <div class="login-brand">
              <img src="<?php echo base_url('/assets_stisla/img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="<?php base_url('auth/registration') ?>" class="needs-validation" novalidate="">
                  <div class="row">
                    <div class="form-group col">
                      <label for="name">Full Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus required="" value="<?php echo set_value('name'); ?>">
                      <div class="invalid-feedback">
                        Please fill in your name
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus value="<?php echo set_value('email'); ?>">
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="" value="<?php echo set_value('password'); ?>">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm" required="" value="<?php echo set_value('password-confirm'); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary btn-lg btn-block">
                    <div class="div">
                      <a href="<?php echo base_url('/auth') ?>" class="my-2 btn btn-outline-primary btn-lg btn-block">Already have account! </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Adi Purnomo 2019 Support by <a href="https://docs.getstisla.com/"> Stisla </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php $this->load->view("/_partials/js") ?>

</body>

</html>