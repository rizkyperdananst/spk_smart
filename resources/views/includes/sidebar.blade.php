<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3">SPK SMART</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Surat Masuk -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/kriteria*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('kriteria.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Kriteria</span></a>
    </li>

    <!-- Nav Item - Surat Keluar -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/alternatif*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('alternatif.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Alternatif</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading mt-2">
        Setting
    </div>

    <!-- Nav Item - Galeri -->
    <li class="nav-item mb-0 mt-0 {{ Request()->is('admin/setting-akun*') ? 'active' : '' }}">
        <a class="nav-link pb-0" href="{{ route('setting-akun.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting Akun</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>