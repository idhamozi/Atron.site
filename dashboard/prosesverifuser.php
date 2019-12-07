<?php
include ('../koneksi.php');
include ('../notifikasi/mailterverifikasi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {
    $npm = $_GET['user'];

    $queryupdate = mysqli_query($koneksi, "UPDATE user SET poin = 1 WHERE npm = '$npm'");
    if ($queryupdate) {

      echo '<script language="javascript">alert("Email Terkirim, Akun telah di aktifkan !"); document.location="manajemen_user.php";</script>';

    }
  }
}
?>
