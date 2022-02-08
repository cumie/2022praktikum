<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'lokasi':
            $active_menu_lokasi = "active";
            $active_menu_jabatan = "";
            $active_menu_bagian = "";
            $active_menu_karyawan = "";
            break;
        case 'jabatan':
            $active_menu_lokasi = "";
            $active_menu_jabatan = "active";
            $active_menu_bagian = "";
            $active_menu_karyawan = "";
            break;
        case 'bagian':
            $active_menu_lokasi = "";
            $active_menu_jabatan = "";
            $active_menu_bagian = "active";
            $active_menu_karyawan = "";
            break;
        case 'karyawan':
            $active_menu_lokasi = "";
            $active_menu_jabatan = "";
            $active_menu_bagian = "";
            $active_menu_karyawan = "active";
            break;
        default:
            $active_menu_lokasi = "";
            $active_menu_jabatan = "";
            $active_menu_bagian = "";
            $active_menu_karyawan = "";
            break;
    }
} else {
    $active_menu_lokasi = "";
    $active_menu_jabatan = "";
    $active_menu_bagian = "";
    $active_menu_karyawan = "";
};
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="?page=home" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Starter Page</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=lokasi" class="nav-link <?= $active_menu_lokasi; ?>">
                <i class="nav-icon fas fa-map-marker"></i>
                <p>Lokasi</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=jabatan" class="nav-link <?= $active_menu_jabatan; ?>">
                <i class="nav-icon fas fa-eject"></i>
                <p>Jabatan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=bagian" class="nav-link <?= $active_menu_bagian; ?>">
                <i class="nav-icon fas fa-sitemap"></i>
                <p>Bagian</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="?page=karyawan" class="nav-link <?= $active_menu_karyawan; ?>">
                <i class="nav-icon fas fa-user"></i>
                <p>Karyawan</p>
            </a>
        </li>
    </ul>
</nav>