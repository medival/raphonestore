<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="<?= base_url('site') ?>" class="navbar-brand sidebar-gone-hide">Raphonestore</a>
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
        </ul>
    </div>
    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?php echo base_url('/assets_stisla/img/avatar/avatar-1.png') ?>" class=" rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <?php if ($user['name'] == NULL) { ?>
                    <a href="<?php echo base_url('auth') ?>" class="dropdown-item has-icon text-info">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                <?php } else { ?>
                    <a href="<?php echo base_url('products/stock') ?>" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-in-alt"></i> Logout
                    </a>
                <?php } ?>
            </div>
        </li>
    </ul>
</nav>

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                </ul>
            </li>
        </ul>
    </div>
</nav>