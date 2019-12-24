<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/header.php"); ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php $this->load->view("_partials/navbar.php"); ?>

            <!-- <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?php echo base_url('/assets_stisla/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"> <?php echo $user['name'] ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo base_url('/auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav> -->

            <!-- Sidebar -->
            <?php $this->load->view("_partials/sidebar.php"); ?>


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard <?php echo $user['name'] ?></h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-stats">
                                    <div class="card-stats-title">Order Statistics -
                                        <div class="dropdown d-inline">
                                            <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li class="dropdown-title">Select Month</li>
                                                <li><a href="#" class="dropdown-item">January</a></li>
                                                <li><a href="#" class="dropdown-item">February</a></li>
                                                <li><a href="#" class="dropdown-item">March</a></li>
                                                <li><a href="#" class="dropdown-item">April</a></li>
                                                <li><a href="#" class="dropdown-item">May</a></li>
                                                <li><a href="#" class="dropdown-item">June</a></li>
                                                <li><a href="#" class="dropdown-item">July</a></li>
                                                <li><a href="#" class="dropdown-item active">August</a></li>
                                                <li><a href="#" class="dropdown-item">September</a></li>
                                                <li><a href="#" class="dropdown-item">October</a></li>
                                                <li><a href="#" class="dropdown-item">November</a></li>
                                                <li><a href="#" class="dropdown-item">December</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-stats-items">
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count">24</div>
                                            <div class="card-stats-item-label">Pending</div>
                                        </div>
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count">12</div>
                                            <div class="card-stats-item-label">Shipping</div>
                                        </div>
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count">23</div>
                                            <div class="card-stats-item-label">Completed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-archive"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Orders</h4>
                                    </div>
                                    <div class="card-body">
                                        59
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                    <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Balance</h4>
                                    </div>
                                    <div class="card-body">
                                        $187,13
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                    <canvas id="sales-chart" height="80"></canvas>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Sales</h4>
                                    </div>
                                    <div class="card-body">
                                        4,732
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistics</h4>
                                    <div class="card-header-action">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary">Week</a>
                                            <a href="#" class="btn">Month</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" height="182"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card gradient-bottom">
                                <div class="card-header">
                                    <h4>Top 5 Products</h4>
                                    <div class="card-header-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                                        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <li class="dropdown-title">Select Period</li>
                                            <li><a href="#" class="dropdown-item">Today</a></li>
                                            <li><a href="#" class="dropdown-item">Week</a></li>
                                            <li><a href="#" class="dropdown-item active">Month</a></li>
                                            <li><a href="#" class="dropdown-item">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body" id="top-5-scroll">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="<?php echo base_url('/assets_stisla/img/products/product-3-50.png') ?>" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                                </div>
                                                <div class="media-title">oPhone S9 Limited</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="64%"></div>
                                                        <div class="budget-price-label">$68,714</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="43%"></div>
                                                        <div class="budget-price-label">$38,700</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="<?php echo base_url('/assets_stisla/img/products/product-4-50.png') ?>" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                                </div>
                                                <div class="media-title">iBook Pro 2018</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="84%"></div>
                                                        <div class="budget-price-label">$107,133</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="60%"></div>
                                                        <div class="budget-price-label">$91,455</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="<?php echo base_url('/assets_stisla/img/products/product-1-50.png') ?>" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                                </div>
                                                <div class="media-title">Headphone Blitz</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="34%"></div>
                                                        <div class="budget-price-label">$3,717</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                        <div class="budget-price-label">$2,835</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                                </div>
                                                <div class="media-title">oPhone X Lite</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="45%"></div>
                                                        <div class="budget-price-label">$13,972</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="30%"></div>
                                                        <div class="budget-price-label">$9,660</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                                </div>
                                                <div class="media-title">Old Camera</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="35%"></div>
                                                        <div class="budget-price-label">$7,391</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                        <div class="budget-price-label">$5,472</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Foooter  -->
            <?php $this->load->view("_partials/footer.php"); ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <?php $this->load->view("_partials/js.php"); ?>
</body>

</html>