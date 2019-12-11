<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-cog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin SMAN 6 Luwu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <div class="sidebar-heading">
        Admin
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Berita:</h6>
                <a class="collapse-item" href="http://localhost/websekolah/admin/berita">Berita</a>
                <h6 class="collapse-header">Data Guru & Pegawai:</h6>
                <a class="collapse-item" href="http://localhost/websekolah/admin/guru">Guru</a>
                <a class="collapse-item" href="http://localhost/websekolah/admin/pegawai">Pegawai</a>
                <h6 class="collapse-header">Data Siswa:</h6>
                <a class="collapse-item" href="http://localhost/websekolah/admin/siswa">Siswa</a>
                <a class="collapse-item" href="http://localhost/websekolah/admin/prestasi">Prestasi Siswa</a>
            </div>
        </div>
        <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i class="fas fa-sign-out-alt fa-user"></i> <span>Logout</span> </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->