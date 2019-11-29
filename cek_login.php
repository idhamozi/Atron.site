<?php
//aktif session
session_start();

//menghubungkan php dengan database
include 'koneksi.php';

//menangkap data yang dikirim
$npm = $_POST['npm'];
$password = $_POST['password'];

//menyeleksi data user dengan npm dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE npm='$npm' and password='password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada Database
if (cek > 0) {
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if ($data['level'] == "admin") {

      //buat session login
      $_SESSION['npm'] = $npm;
      $_SESSION['level'] = "admin";

      //alihkan ke dashboard admin
      header("location:halaman_admin.php");

      //cek jika user login sebagai mahasiswa
    }else if ($data['level'] == "mahasiswa") {

      //buat session login
      $_SESSION['npm'] = $npm;
      $_SESSION['level'] = "mahasiswa";

      //alihkan ke dashboard admin
      header("location:halaman_mahasiswa.php");
    }else {
      //alihkan ke halaman login kembali
      header("location:login.html?pesan=gagal");
    }
} else {
  header("location:login.php?pesan=gagal");
}
 ?>
