<?php
/*
 * @author Codingan
 * @website http://codingan.com
 * @facebook https://www.facebook.com/codingan
 */

include ('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {

    // menampilkan semua error kecuali deprecated dan notice
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

    require 'phpmailer/PHPMailerAutoload.php';

    $npm = $_GET['user'];

    $emailuser = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm'");
    $email = mysqli_fetch_array($emailuser);

    $querygmail = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm' AND email LIKE '%gmail%'");
    $gmail = mysqli_fetch_array($querygmail);

    $queryyahoo = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm' AND email LIKE '%yahoo%'");
    $yahoo = mysqli_fetch_array($queryyahoo);

    $main_message = __DIR__.'/pesan_terverifikasi.php';
    $message = file_get_contents($main_message);

    // membuat obyek phpmailer
    $mail = new PHPMailer(true);

    // memberitahu class untuk menggunakan SMTP
    $mail->IsSMTP();

    // mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
    $mail->SMTPDebug = 0;

    // mengaktifkan otentikasi SMTP
    $mail->SMTPAuth = true;

    // menetapkan prefix ke server
    $mail->SMTPSecure = 'ssl';

    if ($gmail['email'] == $querygmail) {
      // atur Gmail sebagai server SMTP
      $mail->Host = 'smtp.gmail.com';
    } elseif ($yahoo['email'] == $queryyahoo) {
      // atur Yahoo sebagai server SMTP
      $mail->Host = 'smtp.mail.yahoo.com';
    }

    // atur server SMTP untuk server Gmail
    $mail->Port = 465;

    // alamat gmail kamu
    $mail->Username = 'king.idham00@gmail.com';

    // password Anda harus disertakan dalam tanda kutip tunggal
    $mail->Password = '5461213mohammadidhaM';

    // tambahkan subjek
    $mail->Subject = ' Notifkasi Verifikasi Akun ATRON ';

    // alamat email pengirim dan nama
    $mail->SetFrom('king.idham00@gmail.com', 'Admin ATRON');

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
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>

  </body>
</html>
