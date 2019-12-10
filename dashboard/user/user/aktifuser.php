<?php
include ('../../../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {
    $npm = $_GET['user'];

    $queryupdate = mysqli_query($koneksi, "UPDATE user SET poin = 1 WHERE npm = '$npm'");
    if ($queryupdate) { ?>

        <script type="text/javascript">
          alert('Akun telah di aktifkan !');
        </script>
      <?php
      header("location:../../admin/manajemen_user.php");
    }
  }
}
?>
