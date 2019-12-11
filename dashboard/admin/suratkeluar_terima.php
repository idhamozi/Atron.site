<?php
include ('../../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['teman'])) {
    $npm_teman = $_GET['teman'];

    $queryupdate = mysqli_query($koneksi, "UPDATE surat_keluar SET poin = 1 WHERE npm_teman = '$npm_teman'");

    echo '<script language="javascript"> document.location="status_pengajuan_surat_keluar.php";</script>';

  }
}
?>
