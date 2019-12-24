<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php base_url('/stisla/mahasiswa') ?>">Adi Purnomo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php base_url('/stisla/mahasiswa') ?>">ADI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/overview') ?>">Overview</a></li>
                </ul>
            </li>
            <li class="menu-header"> Contoh </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>CRUD</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/') ?>"> Lihat Data</a></li>
                    <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/add') ?>"> Add Data</a></li>
                </ul>
            </li>
            <li class="menu-header"> Data </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span> Mahasiswa </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/admin') ?>"> Data Pendaftar </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>"> <i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>