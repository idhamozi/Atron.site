<?php

  include "koneksi.php";
  session_start();

  // escape string dan htmlentities, cara untuk menanggulangi dan mempersempit serangan SQL Injection
  // menangkap data dari form login
  $npm = mysqli_real_escape_string($koneksi,htmlentities($_POST['npm']));
  $password = mysqli_real_escape_string($koneksi,htmlentities($_POST['password']));
  // enkripsi menggunakan md5
  $passworduser = mysqli_real_escape_string($koneksi,htmlentities(md5($_POST['password'])));

  $login = mysqli_query($koneksi,"select * from admin where npm='$npm' and password='$password'");
  $cek = mysqli_num_rows($login);
  $loginuser = mysqli_query($koneksi,"select * from user where npm='$npm' and password='$passworduser'");
  $cekuser = mysqli_num_rows($loginuser);
  $cekpoin = mysqli_fetch_array($loginuser);

  $poin = $cekpoin['poin'];

  if($cek > 0){
      $_SESSION['npm'] = $npm;
      echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="dashboard/admin/dashboard_admin.php";</script>';

  }
  elseif ($cekuser > 0) {
    if ($poin == 1) {

        $_SESSION['npm'] = $npm;
        echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="dashboard/user/dashboard_user.php";</script>';
    } elseif ($poin == 2) {
      echo '<script language="javascript">alert("Akun Anda telah di Nonaktifkan !"); document.location="login.php";</script>';
    } else {
      echo '<script language="javascript">alert("Akun Belum di Verifikasi !"); document.location="login.php";</script>';
    }
   }
  else{
      echo '<script language="javascript">alert("Anda Gagal Login !"); document.location="login.php";</script>';

  }
?>
