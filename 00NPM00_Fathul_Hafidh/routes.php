<?php
if (isset($_GET['page'])) {
$page = $_GET['page'];
switch($page) {
    case '':
        case 'home':
            file_exists('pages/home.php') ? include 'pages/home.php' : include 'pages/404.php';
            break; 
        case 'lokasiread':
            file_exists('pages/lokasi/lokasiread.php') ? include 'pages/lokasi/lokasiread.php' : include 'pages/404.php';
            break;
        case 'bagianread':
            file_exists('pages/bagian/bagianread.php') ? include 'pages/bagian/bagianread.php' : include 'pages/404.php';
            break;
        case 'jabatanread':
            file_exists('pages/jabatan/jabatanread.php') ? include 'pages/jabatan/jabatanread.php' : include 'pages/404.php';
            break;
        case 'karyawanread':
            file_exists('pages/karyawan/karyawanread.php') ? include 'pages/karyawan/karyawanread.php' : include 'pages/404.php';
            break;
        default:
            include 'pages/404.php';
}
} else {
    include 'pages/home.php';
}
