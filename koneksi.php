<?php

date_default_timezone_set('Asia/Jakarta');

function curdate() {
    return date('Y-m-d');
}

$koneksi = mysqli_connect('localhost', 'root', '', 'atron');
if (!$koneksi) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>
