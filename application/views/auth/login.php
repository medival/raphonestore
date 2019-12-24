<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <?php $this->load->view("_partials/header") ?>
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
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php base_url('auth') ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus value="<?php set_value('email'); ?>">
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo site_url('auth/registration'); ?>">Create One</a>
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