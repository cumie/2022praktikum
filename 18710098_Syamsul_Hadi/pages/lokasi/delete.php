<?php
$lokasi = new Lokasi();
$lokasi->generate($_GET['id']);
if (!empty($_POST)) {
    $lokasi->delete($lokasi->getItem('id'));
    $_SESSION['pesan'] = "Data Lokasi " . $lokasi->getItem('nama_lokasi') . " berhasil dihapus.";
    header("Location:index.php?page=lokasi");
};
?>
<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hapus Data Lokasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Lokasi</a></li>
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
                            <p>Apakah anda yakin menghapus lokasi</p>
                            <h5><?= $lokasi->getItem('nama_lokasi'); ?> ?</h5>
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