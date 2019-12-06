<?php
include ('../koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['user'])) {
    $npm = $_GET['user'];

    $querydelete = mysqli_query($koneksi, "DELETE FROM user WHERE npm = '$npm'");
    if ($querydelete) { ?>

        <script type="text/javascript">
          alert('Akun telah di hapus !');
        </script>
      <?php
      header("location:manajemen_user.php");
    }
  }
}
?>
