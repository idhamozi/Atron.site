<?php
include ('../../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Surat Keluar</title>

  <!-- Fontfaces CSS-->
  <link href="../css/font-face.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<?php
$npm = $_SESSION['npm'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm'");
$data = mysqli_fetch_array($query);

// $querytahun16 = mysqli_query($koneksi, "SELECT * FROM user WHERE npm LIKE '16%' ");
// $tahun16 = mysqli_fetch_array($querytahun16);
// $querytahun17 = mysqli_query($koneksi, "SELECT * FROM user WHERE npm LIKE '17%' ");
// $tahun17 = mysqli_fetch_array($querytahun17);
// $querytahun18 = mysqli_query($koneksi, "SELECT * FROM user WHERE npm LIKE '18%' ");
// $tahun18 = mysqli_fetch_array($querytahun18);
// $querytahun19 = mysqli_query($koneksi, "SELECT * FROM user WHERE npm LIKE '19%' ");
// $tahun19 = mysqli_fetch_array($querytahun19);

// if ($npm == $tahun16['npm']) {
//   $tahunakademik = 2016;
// } elseif ($npm == $tahun17['npm']) {
//   $tahunakademik = 2017;
// } elseif ($npm == $tahun18['npm']) {
//   $tahunakademik = 2018;
// } elseif ($npm == $tahun19['npm']) {
//   $tahunakademik = 2019;
// }

$tahunakademik1 = date("Y")+1;
$tahunakademik = date("Y");

$akademik = $tahunakademik."/".$tahunakademik1;

if ($npm == 0) {
    header("location:../../index.html");
}
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="dashboard_user.php" style="margin-left:10%;">
                            <img src="../images/icon/logo-atron.png" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="dashboard_user.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="profile_user.php">
                                    <i class="fas fa-user-circle"></i>Profile
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="profile_user.php">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="manage_user.php">Manage Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="pengajuan.php">
                                    <i class="fas fa-fw fa-paper-plane"></i>Pengajuan
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="permohonan_pkl.php">Permohonan PKL</a>
                                    </li>
                                    <li>
                                        <a href="mahasiswa_aktif.php">Keterangan Mahasiswa Aktif</a>
                                    </li>
                                    <li>
                                        <a href="surat_keluar.php">Surat Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="riwayat_pengajuan_user.php">
                                    <i class="fas fa-fw fa-hourglass-half"></i>Riwayat Pengajuan
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../../images/<?php echo $data['foto']  ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="../profile_user.php"><?php echo $data['nama'] ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="profile_user.php">
                                                <img src="../../images/<?php echo $data['foto']  ?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="profile_user.php"><?php echo $data['nama'] ?></a>
                                            </h5>
                                            <span class="email"><?php echo $data['email'] ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="profile_user.php">
                                                <i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="manage_user.php">
                                                <i class="fas fa-fw fa-cog"></i>Manage Profile</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="../../logout.php">
                                            <i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard_user.php">
                            <img src="../images/icon/logo-atron.png"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard_user.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="profile_user.php">
                                <i class="fas fa-user-circle"></i>Profile</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="profile_user.php">My Profile</a>
                                </li>
                                <li>
                                    <a href="manage_user.php">Manage Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="pengajuan.php">
                                <i class="fas fa-copy"></i>Pengajuan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="permohonan_pkl.php">Permohonan PKL</a>
                                </li>
                                <li>
                                    <a href="mahasiswa_aktif.php">Keterangan Mahasiswa Aktif</a>
                                </li>
                                <li>
                                    <a href="surat_keluar.php">Surat Keluar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="riwayat_pengajuan_user.php">
                                <i class="fas fa-fw fa-hourglass-half"></i>Riwayat Pengajuan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                          <img src="../../images/<?php echo $data['foto']  ?>" />
                        </div>
                        <div class="content">
                          <a class="js-acc-btn" href="../profile_user.php"><?php echo $data['nama'] ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                  <a href="profile_user.php">
                                      <img src="../../images/<?php echo $data['foto']  ?>" />
                                  </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                      <a href="profile_user.php"><?php echo $data['nama'] ?></a>
                                    </h5>
                                    <span class="email"><?php echo $data['email'] ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="profile_user.php">
                                        <i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="manage_user.php">
                                        <i class="fas fa-fw fa-cog"></i>Manage Profile</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                              <a href="../../logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->
        
        <div class="card ml-5 mr-5">
            <div class="card-header text-white bg-info text-center">
                <strong>Permohonan Surat Keluar</strong>
            </div>
            <div class="card-body card-block">
                <form action="prosessurat_keluar.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tahun Akademik</label>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" id="tahunakademik" name="tahunakademik" class="form-control" value="<?php echo $akademik; ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama Instansi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="instansi" name="instansi" placeholder="Masukkan nama instansi" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Alamat Instansi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="alamat_ins" id="alamat_ins" rows="4" placeholder="Masukkan alamat instansi" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">No. Telpon Instansi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="no_ins" name="no_ins" placeholder="Masukkan nomor telpon" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Bagian / Divisi yang dituju</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="divisi_tujuan" name="divisi_tujuan" placeholder="Masukkan nomor telpon" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Keperluan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="keperluan" id="keperluan" rows="4" placeholder="Masukkan keperluan anda" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama / NPM Mahasiswa</label>
                        </div>
                        <div class="col col-md-6">
                            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" readonly>
                        </div>
                        <div class="col col-md-3">
                            <input type="text" id="npm" name="npm" class="form-control" value="<?php echo $data['npm']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label"></label>
                        </div>
                        <div class="col col-md-6">
                            <input type="text" id="nama_teman" name="nama_teman" placeholder="Nama Mahasiswa 2" class="form-control">
                        </div>
                        <div class="col col-md-3">
                            <input type="text" id="npm_teman" name="npm_teman" placeholder="NPM Mahasiswa 2" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-fw fa-check-square"></i> Submit
                        </button>
                        <a href="dashboard_user.php" class="btn btn-danger btn-sm">
                            <i class="fas fa-fw fa-arrow-alt-circle-left"></i> Back
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2019 Jaher Team. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script type="text/javascript" src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
