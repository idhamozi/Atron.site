<?php
include ('../../koneksi.php');
include ('../../notifikasi/mailpengajuanselesai.php');

session_start();
$tgl_selesai = CURDATE();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  
  if (isset($_GET['npm_teman'])) {
    $npm_teman = $_GET['npm_teman'];

    $queryupdate = mysqli_query($koneksi, "UPDATE surat_pkl SET poin = 3 , tgl_selesai = '$tgl_selesai' WHERE npm_teman = '$npm_teman'");

    echo '<script language="javascript"> document.location="status_pengajuan_surat_pkl.php";</script>';

  }
}
?>
