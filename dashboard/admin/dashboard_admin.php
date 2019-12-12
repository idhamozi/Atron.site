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
  <title>Dashboard Admin</title>

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

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE npm = '$npm'");
$data = mysqli_fetch_array($query);

$querytotaluser = mysqli_query($koneksi, "SELECT * FROM user WHERE poin > 0");
$numuser = mysqli_num_rows($querytotaluser);

$informatika = mysqli_query($koneksi, "SELECT * FROM user WHERE poin = 1 AND npm LIKE '%081%'");
$totalinformatika = mysqli_num_rows($informatika);

$sifo = mysqli_query($koneksi, "SELECT * FROM user WHERE poin = 1 AND npm LIKE '%082%'");
$totalsifo = mysqli_num_rows($sifo);

$querysuket_kuliah = mysqli_query($koneksi, "SELECT * FROM suket_kuliah ");
$query_proses_suket_kuliah = mysqli_query($koneksi, "SELECT * FROM suket_kuliah WHERE poin > 0 AND poin < 3 ");
$query_selesai_suket_kuliah = mysqli_query($koneksi, "SELECT * FROM suket_kuliah WHERE poin = 3 ");
$suket_kuliah_proses = mysqli_num_rows($query_proses_suket_kuliah);
$suket_kuliah_selesai = mysqli_num_rows($query_selesai_suket_kuliah);
$total_suket_kuliah = mysqli_num_rows($querysuket_kuliah);


$querysurat_keluar = mysqli_query($koneksi, "SELECT * FROM surat_keluar ");
$query_proses_surat_keluar = mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE poin > 0 AND poin < 3 ");
$query_selesai_surat_keluar = mysqli_query($koneksi, "SELECT * FROM surat_keluar WHERE poin = 3 ");
$surat_keluar_proses = mysqli_num_rows($query_proses_surat_keluar);
$surat_keluar_selesai = mysqli_num_rows($query_selesai_surat_keluar);
$total_surat_keluar = mysqli_num_rows($querysurat_keluar);


$querysurat_pkl = mysqli_query($koneksi, "SELECT * FROM surat_pkl ");
$query_proses_surat_pkl = mysqli_query($koneksi, "SELECT * FROM surat_pkl WHERE poin > 0 AND poin < 3 ");
$query_selesai_surat_pkl = mysqli_query($koneksi, "SELECT * FROM surat_pkl WHERE poin = 3 ");
$surat_pkl_proses = mysqli_num_rows($query_proses_surat_pkl);
$surat_pkl_selesai = mysqli_num_rows($query_selesai_surat_pkl);
$total_surat_pkl = mysqli_num_rows($querysurat_pkl);

$proses = $surat_keluar_proses + $surat_pkl_proses + $suket_kuliah_proses;
$selesai = $surat_keluar_selesai + $surat_pkl_selesai + $suket_kuliah_selesai;
$total = $total_surat_keluar + $total_suket_kuliah + $total_surat_pkl;

if ($npm == null){
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
            <a href="#">
              <img src="../images/icon/logo-atron.png"/>
            </a>
          </div>
          <div class="header__navbar">
            <ul class="list-unstyled">
              <li class="has-sub">
                <a href="#">
                  <i class="fas fa-tachometer-alt"></i>Dashboard
                  <span class="bot-line"></span>
                </a>
              </li>
              <li>
                <a href="list_user.php">
                  <i class="fas fa-user-circle"></i>
                  <span class="bot-line"></span>List User
                </a>
              </li>
              <li>
                <a href="manajemen_user.php">
                  <i class="fas fa-key"></i>
                  <span class="bot-line"></span>Manajemen User
                </a>
              </li>
              <li class="has-sub">
                <a href="#">
                  <i class="fas fa-upload"></i>Status Pengajuan
                  <span class="bot-line"></span>
                </a>
                <ul class="header3-sub-list list-unstyled">
                    <li>
                        <a href="status_pengajuan_surat_pkl.php">Surat Praktek Kerja Lapangan</a>
                    </li>
                    <li>
                        <a href="status_pengajuan_surat_mahasiswa_aktif.php">Surat Keterangan Mahasiswa Aktif</a>
                    </li>
                    <li>
                        <a href="status_pengajuan_surat_keluar.php">Surat Keluar</a>
                    </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="header__tool">
            <div class="account-wrap">
              <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                  <img src="../images/icon/profil_unknown.webp"/>
                </div>
                <div class="content">
                  <a class="js-acc-btn" href="#"><?php  echo $data['npm']?></a>
                </div>
                <div class="account-dropdown js-dropdown">
                  <div class="info clearfix">
                    <div class="image">
                      <a href="#">
                        <img src="../images/icon/profil_unknown.webp"/>
                      </a>
                    </div>
                    <div class="content">
                      <h5 class="name">
                        <a href="#"><?php  echo $data['npm']?></a>
                      </h5>
                      <span class="email">-</span>
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
        </div>
      </header>
      <!-- END HEADER DESKTOP-->

      <!-- HEADER MOBILE-->
      <header class="header-mobile header-mobile-2 d-block d-lg-none">
          <div class="header-mobile__bar">
              <div class="container-fluid">
                  <div class="header-mobile-inner">
                      <a class="logo" href="dashboard_admin.php">
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
                          <a class="js-arrow" href="dashboard_admin.php">
                              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                      </li>
                      <li>
                          <a href="list_user.php">
                              <i class="fas fa-user-circle"></i>List User</a>
                      </li>
                      <li>
                          <a href="manajemen_user.php">
                              <i class="fas fa-key"></i>Manajemen User</a>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-copy"></i>Status Pengajuan</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="status_pengajuan_surat_pkl.php">Surat Praktek Kerja Lapangan</a>
                              </li>
                              <li>
                                  <a href="status_pengajuan_surat_mahasiswa_aktif.php">Surat Keterangan Mahasiswa Aktif</a>
                              </li>
                              <li>
                                  <a href="status_pengajuan_surat_keluar.php">Surat Keluar</a>
                              </li>
                          </ul>
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
                        <img src="../images/icon/profil_unknown.webp"/>
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#"><?php  echo $data['npm']?></a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                          <div class="info clearfix">
                              <div class="image">
                                  <a href="#">
                                    <img src="../images/icon/profil_unknown.webp"/>
                                  </a>
                              </div>
                              <div class="content">
                                  <h5 class="name">
                                    <a href="#"><?php  echo $data['npm']?></a>
                                  </h5>
                                  <span class="email">-</span>
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

                  <!-- PAGE CONTENT-->
                  <div class="page-content--bgf7">
                    <!-- WELCOME-->
                    <section class="welcome p-t-10">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <h1 class="title-4 mt-4">Welcome back
                              <span><?php  echo $data['npm']?> !</span>
                            </h1>
                            <hr class="line-seprate">
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- END WELCOME-->

                    <!-- STATISTIC-->
                    <section class="statistic statistic2">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                              <h2 class="number"><?php echo $numuser; ?></h2>
                              <span class="desc">user terdaftar</span>
                              <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                              <h2 class="number"><?php echo $total; ?></h2>
                              <span class="desc">total pengajuan</span>
                              <div class="icon">
                                <i class="zmdi zmdi-upload"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                              <h2 class="number"><?php echo $proses; ?></h2>
                              <span class="desc">pengajuan dalam proses</span>
                              <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                              <h2 class="number"><?php echo $selesai; ?></h2>
                              <span class="desc">pengajuan selesai</span>
                              <div class="icon">
                                <i class="zmdi zmdi-calendar-check"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- END STATISTIC-->

                    <!-- STATISTIC CHART-->
                    <section class="statistic-chart">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                              <h3 class="title-3 m-b-30">pengajuan</h3>
                              <div class="statistic-chart-1-note">
                                <span class="big"><?php echo $total; ?></span>
                                <span>/ <?php echo $selesai; ?> surat selesai</span>
                              </div>
                            </div>
                            <!-- END CHART-->
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                              <h3 class="title-3 m-b-30">Jumlah pengajuan</h3>
                              <div class="table-responsive">
                                <table class="table table-top-campaign">
                                  <tbody>
                                    <tr>
                                      <td>1. Surat Keterangan Mahasiswa Aktif</td>
                                      <td><?php echo $total_suket_kuliah; ?></td>
                                    </tr>
                                    <tr>
                                      <td>2. Surat Pengajuan Keluar</td>
                                      <td><?php echo $total_surat_keluar; ?></td>
                                    </tr>
                                    <tr>
                                      <td>3. Surat Pengajuan PKL</td>
                                      <td><?php echo $total_surat_pkl; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                              <h3 class="title-3 m-b-30">total user aktif</h3>
                              <div class="chart-wrap">
                                <canvas id="percent-chart2"></canvas>
                                <div id="chartjs-tooltip">
                                </div>
                              </div>
                              <div class="chart-info">
                                <div class="chart-note">
                                  <span class="dot dot--red"></span>
                                  <span>sistem informasi</span>
                                </div>
                                <div class="chart-note">
                                  <span class="dot dot--blue"></span>
                                  <span>informatika</span>
                                </div>
                              </div>
                            </div>
                            <!-- END CHART PERCENT-->
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- END STATISTIC CHART-->

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

                <script type="text/javascript">
                  var informatika = <?= $totalinformatika ?>;
                  var sifo = <?= $totalsifo ?>;
                </script>

                <!-- Main JS-->
                <script type="text/javascript" src="../js/main.js"></script>

              </body>

              </html>
              <!-- end document-->
