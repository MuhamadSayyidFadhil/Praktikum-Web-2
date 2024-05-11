<?php
session_start();
if(!$_SESSION["user"]){
    header("location: landingpage/index.html");
}
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../project01/landingpage/images/logopuskesmas.png" alt="Puskesmas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Puskesmas Sejahtera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../project01/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Muhamad Sayyid Fadhil</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <!-- Menu Profil -->
                <li class="nav-item">
                    <a href="../project01/profile/index_profile.php" class="nav-link">
                        <i class="far fa-user nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Table Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../project01/pasien/index_pasien.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../project01/dokter/index_dokter.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../project01/periksa/index_periksa.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../project01/periksa/index_periksa.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Periksa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../project01/kelurahan/index_kelurahan.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Kelurahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../project01/unit_kerja/index_unit_kerja.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Unit Kerja</p>
                            </a>
                        </li>
                    </ul>
                    
                </li>
                <!-- Menu Logout -->
                <li class="nav-item">
                    <a href="configurasi/logout.php" class="nav-link" data-toggle="tooltip" title="Logout">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
