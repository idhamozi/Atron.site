<?php
include ('../../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['keperluan'])) {
    $keperluan = $_GET['keperluan'];

    $queryupdate = mysqli_query($koneksi, "UPDATE suket_kuliah SET poin = 4 WHERE keperluan = '$keperluan'");

    echo '<script language="javascript"> document.location="status_pengajuan_surat_mahasiswa_aktif.php";</script>';

  }
}
?>
