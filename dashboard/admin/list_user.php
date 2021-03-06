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
            $queryuser = mysqli_query($koneksi,"SELECT * FROM user ");

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
                                 <a href="#">
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
                               List User
                             </h1>
                             <hr class="line-seprate">
                         </div>
                     </div>
                 </div>
             </section>
             <!-- END-->

             <!-- TABLE START -->
             <div class="col-lg-12">
                 <div class="table-responsive table--no-card m-b-30">
                   <table id="load_data" class="table table-borderless table-striped table-earning">
                       <thead>
                           <tr>
                               <th class="text-center">EMAIL</th>
                               <th class="text-center">NPM</th>
                               <th class="text-center">NAMA</th>
                               <th class="text-center">NO. HANDPHONE</th>
                               <th class="text-center">PASSWORD</th>
                               <th class="text-center">STATUS AKUN</th>
                           </tr>
                       </thead>
                       <tbody>
                          <?php while ($datauser = mysqli_fetch_assoc($queryuser)) { ?>
                            <tr>
                            <?php if ($datauser['poin'] == 0) { ?>
                              <td class="text-center"><?php echo $datauser["email"]; ?></td>
                              <td class="text-center"><?php echo $datauser["npm"]; ?></td>
                              <td class="text-center"><?php echo $datauser["nama"]; ?></td>
                              <td class="text-center"><?php echo $datauser["no"]; ?></td>
                              <td class="text-center"><?php echo $datauser["password_asli"]; ?></td>
                              <td class="text-center"><b>Menunggu Verifikasi</b></td>
                            <?php } elseif ($datauser['poin'] == 1) { ?>
                                   <td class="text-center"><?php echo $datauser["email"]; ?></td>
                                   <td class="text-center"><?php echo $datauser["npm"]; ?></td>
                                   <td class="text-center"><?php echo $datauser["nama"]; ?></td>
                                   <td class="text-center"><?php echo $datauser["no"]; ?></td>
                                   <td class="text-center"><?php echo $datauser["password_asli"]; ?></td>
                                   <td class="text-center"><b>Aktif</b></td>
                                 <?php } elseif ($datauser['poin'] == 2) { ?>
                                        <td class="text-center"><?php echo $datauser["email"]; ?></td>
                                        <td class="text-center"><?php echo $datauser["npm"]; ?></td>
                                        <td class="text-center"><?php echo $datauser["nama"]; ?></td>
                                        <td class="text-center"><?php echo $datauser["no"]; ?></td>
                                        <td class="text-center"><?php echo $datauser["password_asli"]; ?></td>
                                        <td class="text-center"><b>Tidak Aktif</b></td>

                                 <?php }?>
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
