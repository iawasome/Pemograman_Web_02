<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/img/logo1.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/logo2.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Fasilitas Kesehatan Indonesia</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Tambahkan ikon pada link menggunakan kelas .nav-icon 
                dengan font-awesome atau library ikon lainnya -->
                <li class="nav-item">
                    <a href="{{ route('faskes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clinic-medical"></i>
                        <p>
                            Fasilitas Kesehatan
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('jenisfaskes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-heartbeat"></i>
                        <p>Jenis Kesehatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('provinsis.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Provinsi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kabkota.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>Kabupaten/Kota</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
/* custom styles */
.sidebar-dark-primary {
    background-color: pink !important;
}

.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link, 
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link i, 
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link p {
    color: black !important;
}

.brand-link, .user-panel a {
    color: black !important;
}

.brand-link .brand-text, .user-panel .info a {
    color: black !important;
}
</style>
