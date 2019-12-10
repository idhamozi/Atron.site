<?php
include ('../../koneksi.php');
session_start();

$npm = $_SESSION['npm'];
$password =  md5($_POST['password']);
$password_new = md5($_POST['password_new']);
$password_new_asli = $_POST['password_new_asli'];

$cekpass = mysqli_query($koneksi,"SELECT * FROM user where npm='$npm' AND password='$password'");
$cekuser = mysqli_num_rows($cekpass);

if ($cekuser > 0) {
  $update = mysqli_query($koneksi, "UPDATE user SET password = '$password_new', password_asli = '$password_new_asli' WHERE npm = '$npm' ");
  echo '<script language="javascript">alert("Password Berhasil diperbarui !"); document.location="manage_user.php";</script>';  // code...
}



 ?>
