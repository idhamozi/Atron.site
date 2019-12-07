<?php
include ('../koneksi.php');
include ('../notifikasi/mailtertolak.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {
    $npm = $_GET['user'];

    $querydelete = mysqli_query($koneksi, "DELETE FROM user WHERE npm = '$npm'");
    if ($querydelete) {

      echo '<script language="javascript">alert("Pesan Terkirim, Akun telah di hapus !"); document.location="manajemen_user.php";</script>';

    }
  }
}
?>
