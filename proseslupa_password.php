<?php

include "koneksi.php";

$npm = $_POST['npm'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_asli = $_POST['password_asli'];

$ceknpm = mysqli_query($koneksi,"SELECT * FROM user where npm='$npm' AND email='$email'");
$cekuser = mysqli_num_rows($ceknpm);

if ($password == $password_asli) {
  if ($cekuser > 0) {
    $password = md5($_POST['password']);
    $update = mysqli_query($koneksi, "UPDATE user SET password = '$password', password_asli = '$password_asli' WHERE npm = '$npm' AND email = '$email' ");
    echo '<script language="javascript">alert("Password Berhasil diperbarui !"); document.location="login.php";</script>';
  } else {
    echo '<script language="javascript">alert("Password Gagal diperbarui, NPM/EMAIL Salah !"); document.location="login.php";</script>';
  }
} else {
  echo '<script language="javascript">alert("Harap Konfirmasi Password dengan Benar !"); document.location="lupa_password.php";</script>';
}

 ?>
