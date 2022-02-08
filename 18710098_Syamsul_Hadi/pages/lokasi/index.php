<?php
// require './init.php';
$DB = DB::getInstance();
$lokasi_ = $DB->get('lokasi');
?>

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Lokasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Lokasi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Alert message -->
<?php if (isset($_SESSION['pesan'])) : ?>
    <div class="container">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5 class="d-inline"><i class="icon fas fa-check"></i></h5> <?= $_SESSION['pesan']; ?>
        </div>
    </div>
    <?php session_destroy(); ?>
<?php endif; ?>
<!-- End message -->

<!-- Main content -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Lokasi</h3>
            <a href="?page=lokasi&create=aktif" class="btn btn-success btn-sm float-right">
                <i class="fa fa-plus-circle"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lokasi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($lokasi_) > 0) : ?>
                            <?php foreach ($lokasi_ as $key => $lokasi) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $lokasi->nama_lokasi ?></td>
                                    <td>
                                        <a href="?page=lokasi&edit=aktif&id=<?= $lokasi->id; ?>" class="btn btn-primary btn-sm mr-1">
                                            <i class="fa fa-edit"></i> Ubah
                                        </a>
                                        <a href="?page=lokasi&delete=aktif&id=<?= $lokasi->id; ?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3">Data lokasi belum ada.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- <?php include_once "../2022praktikum/18710098_Syamsul_Hadi/partials/scriptsdatatables.php" ?> -->