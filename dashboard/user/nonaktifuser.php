<?php
include ('../../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {
    $npm = $_GET['user'];

    $queryupdate = mysqli_query($koneksi, "UPDATE user SET poin = 2 WHERE npm = '$npm'");
    if ($queryupdate) { ?>

        <script type="text/javascript">
          alert('Akun telah di nonaktifkan !');
        </script>
      <?php
      header("location:../manajemen_user.php");
    }
  }
}
?>
