<?php
$jabatan = new Jabatan();
$jabatan->generate($_GET['id']);

if (!empty($_POST)) {
    $jabatan->delete($jabatan->getItem('id'));
    $_SESSION['pesan'] = "Data Jabatan " . $jabatan->getItem('nama_jabatan') . " berhasil dihapus.";
    header("Location:index.php?page=jabatan");
};
?>
<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hapus Data Jabatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
                    <li class="breadcrumb-item active">Hapus Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bullhorn"></i>
                        Konfirmasi
                    </h3>
                </div>
                <!-- /.card-header -->
                <form method="POST">
                    <div class="card-body text-center">
                        <div class="callout callout-danger">
                            <p>Apakah anda yakin menghapus jabatan</p>
                            <h5><?= $jabatan->getItem('nama_jabatan'); ?> ?</h5>
                            <input type="hidden" name="id">
                        </div>
                        <button type="submit" class="btn btn-primary">Ya Hapus</button>
                        <a href="?page=lokasi" class="btn btn-success">Batal</a>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>