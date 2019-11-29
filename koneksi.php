<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'atron');
if (!$koneksi) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>
