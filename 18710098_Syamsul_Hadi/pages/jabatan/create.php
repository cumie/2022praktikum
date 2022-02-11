<?php
$lokasi = new Jabatan();
$pesanError = null;
if (!empty($_POST)) {
    $pesanError = $lokasi->validasi($_POST);
    if (empty($pesanError)) {
        $lokasi->insert();
        $_SESSION['pesan'] = "Data Jabatan " . $lokasi->getItem('nama_jabatan') . " berhasil disimpan.";
        header("Location:index.php?page=jabatan");
    }
};


// 
?>
<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Jabatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Jabatan</h3>
        </div>
        <form method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="namaJabatan">Nama Jabatan</label>
                    <input type="text" class="form-control" id="namaJabatan" placeholder="Masukkan Nama Jabatan" name="nama_jabatan" value="<?= $lokasi->getItem('nama_jabatan'); ?>">
                    <?= $lokasi->errorMessage($pesanError, 'nama_jabatan'); ?>
                </div>
                <div class="form-group">
                    <label for="gapok">Gapok</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control" id="gapok" name="gapok_jabatan" placeholder="Masukkan Gapok" value="<?= $lokasi->getItem('gapok_jabatan'); ?>">
                    </div>
                    <?= $lokasi->errorMessage($pesanError, 'gapok_jabatan'); ?>
                </div>
                <div class="form-group">
                    <label for="tunjangan">Tunjangan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control" name="tunjangan_jabatan" id="tunjangan" placeholder="Masukkan Tunjangan" value="<?= $lokasi->getItem('tunjangan_jabatan'); ?>">
                    </div>
                    <?= $lokasi->errorMessage($pesanError, 'tunjangan_jabatan'); ?>
                </div>
                <div class="form-group">
                    <label for="namaJabatan">Uang Makan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" class="form-control" name="uang_makan_perhari" placeholder="Masukkan Uang Makan" value="<?= $lokasi->getItem('uang_makan_perhari'); ?>">
                    </div>
                    <?= $lokasi->errorMessage($pesanError, 'uang_makan_perhari'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="?page=jabatan" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>