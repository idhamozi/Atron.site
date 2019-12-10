<?php
include ('../../koneksi.php');

$tahunakademik = $_POST['tahunakademik'];
$instansi = $_POST['instansi'];
$alamat_ins = $_POST['alamat_ins'];
$no_ins = $_POST['no_ins'];
$divisi_tujuan = $_POST['divisi_tujuan'];
$keperluan = $_POST['keperluan'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$nama_teman = $_POST['nama_teman'];
$npm_teman = $_POST['npm_teman'];
$tgl_pengajuan = CURDATE();

$query = "INSERT INTO surat_keluar (tahunakademik,instansi,alamat_ins,no_ins,divisi_tujuan,keperluan,nama,npm,nama_teman,npm_teman,tgl_pengajuan,tgl_selesai) VALUES ('$tahunakademik','$instansi','$alamat_ins','$no_ins','$divisi_tujuan','$keperluan','$nama','$npm','$nama_teman','$npm_teman','$tgl_pengajuan','')";
$result = mysqli_query($koneksi,$query);

echo '<script language="javascript">alert("Pengajuan Berhasil !"); document.location="surat_keluar.php";</script>';

 ?>
