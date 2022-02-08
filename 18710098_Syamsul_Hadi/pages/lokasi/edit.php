<?php
$lokasi = new Lokasi();
$pesanError = null;

$lokasi->generate($_GET['id']);
if (!empty($_POST)) {
    $pesanError = $lokasi->validasi($_POST);
    if (empty($pesanError)) {
        $lokasi->update($lokasi->getItem('id'));
        $_SESSION['pesan'] = "Data Lokasi " . $lokasi->getItem('nama_lokasi') . " berhasil diperbarui.";
        header("Location:index.php?page=lokasi");
    }
};


// 
?>
<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Lokasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Lokasi</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Lokasi</h3>
        </div>
        <form method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="namaLokasi">Nama Lokasi</label>
                    <input type="text" class="form-control" id="namaLokasi" placeholder="Masukkan Nama Lokasi" name="nama_lokasi" value="<?= $lokasi->getItem('nama_lokasi'); ?>">
                    <?= $lokasi->errorMessage($pesanError, 'nama_lokasi'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="?page=lokasi" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>