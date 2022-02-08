<?php
require './init.php';
$DB = DB::getInstance();
$lokasi_ = $DB->get('lokasi');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jabatan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Jabatan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Lokasi</h3>
            <a href="?page=lokasicreate" class="btn btn-success btn-sm float-right">
                <i class="fa fa-plus-circle"></i> Tambah Data</a>
        </div>
        <div class="card-body">

            <table id="mytable" class="table table-bordered table-hover">
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
                                <td><?= $key; ?></td>
                                <td><?= $lokasi->nama_lokasi ?></td>
                                <td>
                                    <a href="?page=lokasiupdate&id=<?= $lokasi->id; ?>" class="btn btn-primary btn-sm mr-1">
                                        <i class="fa fa-edit"></i> Ubah
                                    </a>
                                    <a href="?page=lokasidelete&id=<?= $lokasi->id; ?>" class="btn btn-danger btn-sm" onClick="javascript: return confirm('Konfirmasi data akan dihapus?');">
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

<!-- <?php include_once "../2022praktikum/18710098_Syamsul_Hadi/partials/scriptsdatatables.php" ?> -->
<script>
    $(function() {
        $('#mytable').DataTable()
    });
</script>