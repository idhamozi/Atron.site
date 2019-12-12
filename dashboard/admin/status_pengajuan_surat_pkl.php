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
            $querysurat_pkl = mysqli_query($koneksi, "SELECT * FROM surat_pkl ");

            $tahunakademik1 = date("Y")+1;
            $tahunakademik = date("Y");

            $akademik = $tahunakademik."/".$tahunakademik1;

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
                         <a href="dashboard_admin.php">
                             <img src="../images/icon/logo-atron.png"/>
                         </a>
                     </div>
                     <div class="header__navbar">
                         <ul class="list-unstyled">
                             <li class="has-sub">
                                 <a href="dashboard_admin.php">
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
                                     <img src="../images/icon/profil_unknown.webp" alt="Parlika" />
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
                             <h1 class="title-4 mt-4">
                               Pengajuan Surat PKL Tahun Akademik <?php echo $akademik; ?>
                             </h1>
                             <hr class="line-seprate">
                         </div>
                     </div>
                 </div>
             </section>
             <!-- END-->

             <!-- TABLE START -->

             <div class="col-lg-12">
               <div class="col-md-12">
                   <h2 class="title-3 mt-3">
                  Status Pengajuan Surat PKL
                   </h2>
               </div>
                 <div class="table-responsive table--no-card m-b-30">
                   <table class="table table-borderless table-striped table-earning">
                       <thead>
                           <tr>
                           <!-- <th class="text-center">TAHUN AKADEMIK</th> -->
                               <th class="text-center">NAMA</th>
                               <th class="text-center">NPM</th>
                               <th class="text-center">NAMA TEMAN</th>
                               <th class="text-center">NPM TEMAN</th>
                               <th class="text-center">PERUSAHAAN TUJUAN</th>
                               <th class="text-center">ALAMAT PERUSAHAAN</th>
                               <th class="text-center">NO. INSTANSI</th>
                               <th class="text-center">BAGIAN YANG DITUJU</th>
                               <th class="text-center">TGL. MULAI</th>
                               <th class="text-center">TGL. SELESAI</th>
                               <!-- <th class="text-center">TGL PENGAJUAN</th>
                                <th class="text-center">TGL SELESAI</th> -->
                               <!-- <th class="text-center">STATUS</th> -->
                               <th class="text-center">ACTION</th>
                           </tr>
                       </thead>
                       <tbody>
                          <?php while ($surat_pkl = mysqli_fetch_assoc($querysurat_pkl)) { ?>
                            <?php if ($surat_pkl['poin'] == 0 ) { ?>
                                <!-- <td class="text-center"><?php echo $surat_pkl["tahunakademik"]; ?></td> -->
                              <td class="text-center"><?php echo $surat_pkl["nama"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["nama_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["instansi"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["alamat_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["no_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["divisi_tujuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["mulai"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["selesai"]; ?></td>
                              <!-- <td class="text-center"><?php echo $surat_pkl["tgl_pengajuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["tgl_selesai"]; ?></td> -->
                              <!-- <td class="text-center"><strong>Masuk</strong></td> -->
                                <td class="text-center">
                                <a href="<?php echo "suratpkl_terima.php?npm_teman=".$surat_pkl['npm_teman']; ?>" type="button" class="btn btn-outline-success btn-sm">Diterima</a>
                                  <a href="<?php echo "suratpkl_tolak.php?npm_teman=".$surat_pkl['npm_teman']; ?>" type="button" class="btn btn-outline-success btn-sm">Ditolak</a>

                              </td>
                            <?php } elseif ($surat_pkl['poin'] == 1) { ?>
                                <!-- <td class="text-center"><?php echo $surat_pkl["tahunakademik"]; ?></td> -->
                              <td class="text-center"><?php echo $surat_pkl["nama"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["nama_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["instansi"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["alamat_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["no_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["divisi_tujuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["mulai"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["selesai"]; ?></td>
                              <!-- <td class="text-center"><?php echo $surat_pkl["tgl_pengajuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["tgl_selesai"]; ?></td> -->
                              <!-- <td class="text-center"><strong>Dalam Proses</strong></td> -->
                                <td class="text-center">
                                  <a href="#" type="button" class="btn btn-success btn-sm">Dalam Proses</a>
                                  <a href="<?php echo "update_suratpkl2.php?npm_teman=".$surat_pkl['npm_teman']; ?>" type="button" class="btn btn-outline-success btn-sm">Proses Dekan/Wadek</a>
                                  <a href="<?php echo "update_suratpkl3.php?status=".$surat_pkl['npm_teman']; ?>" type="button" class="btn btn-outline-success btn-sm">Siap Diambil</a>
                              </td>
                              <?php } elseif ($surat_pkl['poin'] == 2) { ?>
                                <!-- <td class="text-center"><?php echo $surat_pkl["tahunakademik"]; ?></td> -->
                              <td class="text-center"><?php echo $surat_pkl["nama"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["nama_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["instansi"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["alamat_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["no_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["divisi_tujuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["mulai"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["selesai"]; ?></td>
                              <!-- <td class="text-center"><?php echo $surat_pkl["tgl_pengajuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["tgl_selesai"]; ?></td> -->
                              <!-- <td class="text-center"><strong>Proses Dekan/Wadek</strong></td> -->
                                <td class="text-center">
                                  <a href="#" type="button" class="btn btn-outline-success btn-sm">Dalam Proses</a>
                                  <a href="#" type="button" class="btn btn-success btn-sm">Proses Dekan/Wadek</a>
                                  <a href="<?php echo "update_suratpkl3.php?status=".$surat_pkl['npm_teman']; ?>" type="button" class="btn btn-outline-success btn-sm">Siap Diambil</a>
                              </td>
                              <?php } elseif ($surat_pkl['poin'] == 3) { ?>
                            <!-- <td class="text-center"><?php echo $surat_pkl["tahunakademik"]; ?></td> -->
                              <td class="text-center"><?php echo $surat_pkl["nama"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["nama_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["npm_teman"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["instansi"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["alamat_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["no_ins"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["divisi_tujuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["mulai"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["selesai"]; ?></td>
                              <!-- <td class="text-center"><?php echo $surat_pkl["tgl_pengajuan"]; ?></td>
                              <td class="text-center"><?php echo $surat_pkl["tgl_selesai"]; ?></td> -->
                              <!-- <td class="text-center"><strong>Siap Diambil</strong></td> -->
                                <td class="text-center">
                                  <a href="#" type="button" class="btn btn-outline-success btn-sm">Dalam Proses</a>
                                  <a href="#" type="button" class="btn btn-outline-success btn-sm">Proses Dekan/Wadek</a>
                                  <a href="#" type="button" class="btn btn-success btn-sm">Siap Diambil</a>
                              </td>
                           <?php } ?>
                           </tr>
                         <?php } ?>
                       </tbody>
                   </table>
                 </div>
             </div>
             <!-- TABLE END -->

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
