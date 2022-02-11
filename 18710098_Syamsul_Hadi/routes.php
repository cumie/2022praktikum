<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include('pages/home.php');
            break;
        case 'lokasi':
            if (isset($_GET['create']) && $_GET['create'] === 'aktif') {
                include('pages/lokasi/create.php');
                break;
            } elseif (isset($_GET['edit']) && $_GET['edit'] === 'aktif') {
                include('pages/lokasi/edit.php');
                break;
            } elseif (isset($_GET['delete']) && $_GET['delete'] === 'aktif') {
                include('pages/lokasi/delete.php');
                break;
            }
            include('pages/lokasi/index.php');
            break;
        case 'jabatan':
            if (isset($_GET['create']) && $_GET['create'] === 'aktif') {
                include('pages/jabatan/create.php');
                break;
            } elseif (isset($_GET['edit']) && $_GET['edit'] === 'aktif') {
                include('pages/jabatan/edit.php');
                break;
            } elseif (isset($_GET['delete']) && $_GET['delete'] === 'aktif') {
                include('pages/jabatan/delete.php');
                break;
            }
            include('pages/jabatan/index.php');
            break;
        case 'bagian':
            include('pages/bagian.php');
            break;
        case 'karyawan':
            include('pages/karyawan.php');
            break;
        default:
            echo "Halaman tidak ditemukan";
            break;
    }
}
