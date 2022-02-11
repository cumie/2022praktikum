<?php
// require './init.php';
$DB = DB::getInstance();
$jabatan_ = $DB->get('jabatan');
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

<!-- Alert message -->
<?php if (isset($_SESSION['pesan'])) : ?>
    <div class="container col-lg-6 col-md-6 col-12">
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
            <h3 class="card-title">Data Jabatan</h3>
            <a href="?page=jabatan&create=aktif" class="btn btn-success btn-sm float-right">
                <i class="fa fa-plus-circle"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jabatan</th>
                            <th>Gapok</th>
                            <th>Tunjangan</th>
                            <th>Uang Makan</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($jabatan_) > 0) : ?>
                            <?php foreach ($jabatan_ as $key => $jabatan) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $jabatan->nama_jabatan ?></td>
                                    <td class="text-right">Rp. <?= number_format($jabatan->gapok_jabatan) ?></td>
                                    <td class="text-right">Rp. <?= number_format($jabatan->tunjangan_jabatan) ?></td>
                                    <td class="text-right">Rp. <?= number_format($jabatan->uang_makan_perhari) ?></td>
                                    <td class="text-center">
                                        <a href="?page=jabatan&edit=aktif&id=<?= $jabatan->id; ?>" class="btn btn-primary btn-sm mr-1">
                                            <i class="fa fa-edit"></i> Ubah
                                        </a>
                                        <a href="?page=jabatan&delete=aktif&id=<?= $jabatan->id; ?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3">Data jabatan belum ada.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>