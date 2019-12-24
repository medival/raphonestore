<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url('products/stock/') ?>">RAPHONESTORE</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('products/stock/') ?>">RAPH</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/overview') ?>">Overview</a></li>
                    <li><a class="nav-link" href="<?php echo base_url('site') ?>">Visit Site</a></li>
                </ul>
            </li>
            <li class="menu-header"> Products </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-mobile fa-fw"></i> <span> Handphone </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('products/add') ?>"> Add Products </a></li>
                    <li><a class="nav-link" href="<?php echo base_url('products/stock/') ?>"> Stock Available </a></li>
                </ul>
            </li>
            <li class="menu-header"> Data </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-car"></i> <span> Empty Menu </span></a>
                <ul class="dropdown-menu">
                    <!-- <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/admin') ?>"> Data Pendaftar </a></li> -->
                </ul>
            </li>
            <li class="menu-header"> Setting </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span> Setting </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('setting/user_profile') ?>"> User Profile </a></li>
                    <li><a class="nav-link" href="#"> Password </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>"> <i class="text-danger fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>