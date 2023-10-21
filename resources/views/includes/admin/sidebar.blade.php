<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('asset') }}/img/logo.png" alt="" class="img-fluid" width="50px">
        </div>        
        <div class="sidebar-brand-text mx-3">Admin DWP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Galeri -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('galeri.index') }}">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Nav Item - Kegiatan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kegiatan.index') }}">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Kegiatan</span></a>
    </li>

    <!-- Nav Item - Program Kerja -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('programkerja.index') }}">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Program Kerja</span></a>
    </li>

    <!-- Nav Item - Arsip -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.arsip') }}">
            <i class="fas fa-fw fa-file-pdf"></i>
            <span>Arsip</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
