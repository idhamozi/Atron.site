<?php
include ('../../koneksi.php');

$tahunakademik = $_POST['tahunakademik'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
$nama_ortu = $_POST['nama_ortu'];
$nip = $_POST['nip'];
$pangkat = $_POST['pangkat'];
$instansi = $_POST['instansi'];
$keperluan = $_POST['keperluan'];
$foto_pembayaran = $_FILES['foto_pembayaran']['name'];
$target = "image_pembayaran/".basename($foto_pembayaran);
$tgl_pengajuan = CURDATE();

$select = mysqli_query($koneksi,"select * from suket_kuliah where npm='$npm'");
$cekuser = mysqli_num_rows($select);

  $sql = "INSERT INTO suket_kuliah (tahunakademik,nama,npm,jurusan,semester,nama_ortu,nip,pangkat,instansi,keperluan,foto_pembayaran,tgl_pengajuan,tgl_selesai) VALUES ('$tahunakademik','$nama','$npm','$jurusan','$semester','$nama_ortu','$nip','$pangkat','$instansi','$keperluan','$foto_pembayaran','$tgl_pengajuan','')";
  $result = mysqli_query($koneksi,$sql);

  if (move_uploaded_file($_FILES['foto_pembayaran']['tmp_name'], $target)) {
    	}
    else {
    }
  echo '<script language="javascript">alert("Pengajuan Berhasil !"); document.location="mahasiswa_aktif.php";</script>';






 ?>
