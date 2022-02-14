<?php
if (isset($_GET['id'])) {

    include_once "database/database.php";
    $database = new Database();
    $db = $database->getConnection();

    if (isset($_POST['button_update'])) {

        $updateSql = "UPDATE bagian SET nama_bagian = ?, karyawan_id = ?, lokasi_id = ? WHERE id = ?";
        $stmt = $db->prepare($updateSql);
        $stmt->bindParam(1, $_POST['nama_bagian']);
        $stmt->bindParam(2, $_POST['karyawan_id']);
        $stmt->bindParam(3, $_POST['lokasi_id']);
        $stmt->bindParam(4, $_POST['id']);
        if ($stmt->execute()) {
            $_SESSION['hasil_update'] = true;
        } else {
            $_SESSION['hasil_update'] = false;
        }
        echo "<meta http-equiv='refresh' content='0;url=?page=bagianread'>";
    }

    $id = $_GET['id'];
    $findSql = "SELECT * FROM bagian WHERE id = ?";
    $stmt = $db->prepare($findSql);
    $stmt->bindParam(1, $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch();
    if (isset($row['id'])) {
?>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bagian</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                            <li class="breadcrumb-item"><a href="?page=bagianread">Bagian</a></li>
                            <li class="breadcrumb-item active">Ubah Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ubah Bagian</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="nama_bagian">Nama Bagian</label>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                            <input type="text" class="form-control" name="nama_bagian" value="<?php echo $row['nama_bagian'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="karyawan_id">Kepala Bagian</label>
                            <select class="form-control" name="karyawan_id">
                                <option value="">-- Pilih Kepala Bagian --</option>
                                <?php

                                $selectSQL = "SELECT * FROM karyawan";
                                $stmt_karyawan = $db->prepare($selectSQL);
                                $stmt_karyawan->execute();

                                while ($row_karyawan = $stmt_karyawan->fetch(PDO::FETCH_ASSOC)) {

                                    $selected = $row_karyawan["id"] == $row["karyawan_id"] ? " selected" : "";

                                    echo "<option value=\"" . $row_karyawan["id"] . "\" " . $selected . ">" . $row_karyawan["nama_lengkap"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi_id">Lokasi</label>
                            <select class="form-control" name="lokasi_id">
                                <option value="">-- Pilih Lokasi --</option>
                                <?php

                                $selectSQL = "SELECT * FROM lokasi";
                                $stmt_lokasi = $db->prepare($selectSQL);
                                $stmt_lokasi->execute();

                                while ($row_lokasi = $stmt_lokasi->fetch(PDO::FETCH_ASSOC)) {

                                    $selected = $row_lokasi["id"] == $row["lokasi_id"] ? " selected" : "";

                                    echo "<option value=\"" . $row_lokasi["id"] . "\" " . $selected . ">" . $row_lokasi["nama_lokasi"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <a href="?page=bagianread" class="btn btn-danger btn-sm float-right"><i class="fa fa-times"></i> Batal</a>
                        <button type="submit" name="button_update" class="btn btn-success btn-sm float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </section>
<?php
    } else {
        $_SESSION['hasil_update'] = false;
        echo "<meta http-equiv='refresh' content='0;url=?page=bagianread'>";
    }
} else {
    $_SESSION['hasil_update'] = false;
    echo "<meta http-equiv='refresh' content='0;url=?page=bagianread'>";
}
include_once "partials/scripts.php"
?>