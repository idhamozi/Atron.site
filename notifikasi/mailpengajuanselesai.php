<?php
/*
 * @author Codingan
 * @website http://codingan.com
 * @facebook https://www.facebook.com/codingan
 */

// include ('../../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // menampilkan semua error kecuali deprecated dan notice
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

    require 'phpmailer/PHPMailerAutoload.php';

    $suket = $_GET['keperluan'];
    $suratpkl = $_GET['status'];
    $suratkeluar = $_GET['teman'];


    if (isset($_GET['keperluan'])) {

      $emailuser = mysqli_query($koneksi, "SELECT * FROM user,suket_kuliah WHERE suket_kuliah.keperluan = '$suket' AND user.npm = suket_kuliah.npm ");
      $email = mysqli_fetch_array($emailuser);
    }
    if (isset($_GET['status'])) {

      $emailuser = mysqli_query($koneksi, "SELECT * FROM user,surat_pkl WHERE surat_pkl.npm_teman = '$suratpkl' AND user.npm = surat_pkl.npm ");
      $email = mysqli_fetch_array($emailuser);
    }
    if (isset($_GET['teman'])) {

      $emailuser = mysqli_query($koneksi, "SELECT * FROM user,surat_keluar WHERE surat_keluar.npm_teman = '$suratkeluar' AND user.npm = surat_keluar.npm ");
      $email = mysqli_fetch_array($emailuser);
    }

    $main_message = __DIR__.'/pesan_siap_diambil.php';
    $message = file_get_contents($main_message);

    // membuat obyek phpmailer
    $mail = new PHPMailer(true);

    // memberitahu class untuk menggunakan SMTP
    $mail->IsSMTP();

    // mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
    $mail->SMTPDebug = 2;

    // mengaktifkan otentikasi SMTP
    $mail->SMTPAuth = true;

    // menetapkan prefix ke server
    $mail->SMTPSecure = 'ssl';

    // atur Atron.site sebagai server SMTP
    $mail->Host = 'mail.atron.site ';

    // atur server SMTP untuk server
    $mail->Port = 465;

    // alamat gmail kamu
    $mail->Username = 'admin@atron.site';

    // password Anda harus disertakan dalam tanda kutip tunggal
    $mail->Password = '*****';

    // tambahkan subjek
    $mail->Subject = ' Notifkasi Verifikasi Akun ATRON ';

    // alamat email pengirim dan nama
    $mail->SetFrom('admin@atron.site', 'Admin ATRON');

    // alamat email penerima
    $mail->AddAddress($email['email']);

    // jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
    //$mail->AddAddress('tosend@domain.com');

    // jika kamu ingin mengirim Carbon copy (Cc)
    //$mail->AddCC('tosend@domain.com');

    // jika kamu ingin mengirim Blind carbon copy (Bcc)
    //$mail->AddBCC('tosend@domain.com');

    // tambahkan isi pesan
    $mail->MsgHTML($message);

    // tambahkan lampiran jika ada
    // $mail->AddAttachment('lampiran.png');

    try {
        // kirim email
        $mail->Send();
        $msg = "Email berhasil dikirim";
    } catch (phpmailerException $e) {
        $msg = $e->getMessage();
    } catch (Exception $e) {
        $msg = $e->getMessage();
    }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <?php echo $msg; ?>
  </body>
</html>
