<?php
include ('../../koneksi.php');

$tahunakademik = $_POST['tahunakademik'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$nama_teman = $_POST['nama_teman'];
$npm_teman = $_POST['npm_teman'];
$instansi = $_POST['instansi'];
$alamat_ins = $_POST['alamat_ins'];
$no_ins = $_POST['no_ins'];
$divisi_tujuan = $_POST['divisi_tujuan'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$tgl_pengajuan = CURDATE();

$select = mysqli_query($koneksi,"select * from surat_pkl where npm='$npm'");
$status = mysqli_fetch_array($select);
$cekuser = mysqli_num_rows($select);

if ($cekuser == 0) {

    $sql = "INSERT INTO surat_pkl (tahunakademik,nama,npm,nama_teman,npm_teman,instansi,alamat_ins,no_ins,divisi_tujuan,mulai,selesai,tgl_pengajuan,tgl_selesai) VALUES ('$tahunakademik','$nama','$npm','$nama_teman','$npm_teman','$instansi','$alamat_ins','$no_ins','$divisi_tujuan','$mulai','$selesai','$tgl_pengajuan','')";
    $result = mysqli_query($koneksi,$sql);

    echo '<script language="javascript">alert("Pengajuan Berhasil !"); document.location="permohonan_pkl.php";</script>';
} elseif ($cekuser > 0 AND $status['poin'] == 4) {
    $sql = "INSERT INTO surat_pkl (tahunakademik,nama,npm,nama_teman,npm_teman,instansi,alamat_ins,no_ins,divisi_tujuan,mulai,selesai,tgl_pengajuan,tgl_selesai) VALUES ('$tahunakademik','$nama','$npm','$nama_teman','$npm_teman','$instansi','$alamat_ins','$no_ins','$divisi_tujuan','$mulai','$selesai','$tgl_pengajuan','')";
    $result = mysqli_query($koneksi,$sql);

    echo '<script language="javascript">alert("Pengajuan Berhasil !"); document.location="permohonan_pkl.php";</script>';
} else {
    echo '<script language="javascript">alert("PKL Anda sedang di proses !"); document.location="permohonan_pkl.php";</script>';
}



 ?>
