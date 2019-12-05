<?php
include "koneksi.php";

$email = $_POST['email'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$password = md5($_POST['password']);
$foto = $_FILES['foto']['name'];
$target = "images/".basename($foto);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
  	}
  else {

  }

$loginuser = mysqli_query($koneksi,"select * from user where npm='$npm'");
$cekuser = mysqli_num_rows($loginuser);

if($cekuser > 0){
    //
    echo '<script language="javascript">alert("Data Sudah Ada !"); document.location="index.html";</script>';

}
else{

  	$sql = "insert into user (email,npm,nama,no,password,foto) values('$email','$npm','$nama','$no','$password','$foto')";
    $result = mysqli_query($koneksi,$sql);

    echo '<script language="javascript">alert("Registrasi Berhasil !");</script>';

}

 ?>
