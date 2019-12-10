<?php

  include "koneksi.php";
  session_start();

  $npm = $_POST['npm'];
  $password = $_POST['password'];
  $passworduser = md5($_POST['password']);

  // $query1 =  $link->query("select * from register where username='$username' and password='$password' and approve='1'");
  // $query1 = $link->query("select * from registrasi where username='$username' and pass='$password'");
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
