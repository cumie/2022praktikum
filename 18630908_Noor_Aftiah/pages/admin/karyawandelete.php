<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $database = new Database();
    $db = $database->getConnection();

    $deleteSQL = "DELETE FROM karyawan where id=?";
    $stmt = $db->prepare($deleteSQL);
    $stmt->bindParam(1, $_GET['id']);
    if ($stmt->execute()) {
        $deleteKaryawanSQL = "DELETE FROM pengguna WHERE id=?";
        $stmtKaryawan = $db->prepare($deleteKaryawanSQL);
        $stmtKaryawan->bindParam(1, $_GET['id']);
        if ($stmtKaryawan->execute()) {

            $_SESSION['hasil'] = true;
        } else {
            $_SESSION['hasil'] = false;
        }
    }
}
echo "<meta http-equiv='refresh' content='0;url=?page=karyawanread'>";
