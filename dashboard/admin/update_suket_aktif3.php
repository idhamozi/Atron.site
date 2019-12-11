<?php
include ('../../koneksi.php');
include ('../../notifikasi/mailpengajuanselesai.php');

session_start();
$tgl_selesai = CURDATE();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['keperluan'])) {
    $keperluan = $_GET['keperluan'];

    $queryupdate = mysqli_query($koneksi, "UPDATE suket_kuliah SET poin = 3 , tgl_selesai = '$tgl_selesai' WHERE keperluan = '$keperluan'");

    echo '<script language="javascript"> document.location="status_pengajuan_surat_mahasiswa_aktif.php";</script>';

  }
}
 ?>
