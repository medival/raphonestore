<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php base_url('/stisla/mahasiswa') ?>">Adi Purnomo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php base_url('/stisla/mahasiswa') ?>">ADI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Welcome</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/home') ?>">Home</a></li>
                </ul>
            </li>
            <li class="menu-header"> Pendaftaran Mahasiswa </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Pendaftar</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?php echo base_url('stisla/mahasiswa/add_form') ?>"> Isi Formulir </a></li>
                </ul>
            </li>
            <li>
                <a class="nav-link" href="<?php echo base_url('auth/logout') ?>"> <i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
            </li>
        </ul>
    </aside>
</div>