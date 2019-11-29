<?php
include ('koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ATRON</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Fixed-Navbar-start-with-transparency-background-BS4-.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
            </div>
        </div>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span></button><i class="fa fa-home" style="font-size: 50px;color: rgb(171,194,255);"></i>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
                    $npm = $_SESSION['npm'];
                    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm'");
                    $data = mysqli_fetch_array($query);

         ?>
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 style="color: rgb(23,162,184);">Profile </h1>
                    <hr>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label >Nama</label><input align="center" disabled="" value="<?php  echo $data['nama']?>" class="form-control" type="text" name="firstname" style="background-color: rgba(118,156,255,0.61);"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>NPM</label><input class="form-control" value="<?php echo $data['npm']?>" type="text" name="password" autocomplete="off" required="" style="background-color: rgb(171,194,255);"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>No. Telp</label><input disabled="" value="<?php echo $data['no']?>" class="form-control" type="text" name="confirmpass" autocomplete="off" required="" style="background-color: rgb(171,194,255);"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Email </label><input class="form-control" value="<?php echo $data['email']?>" disabled="" type="text" autocomplete="off" required="" name="email" style="background-color: rgb(171,194,255);"></div>
                    <hr>
                </div>
                <div class="form-group"><BUTTON ><a href="index.html">Keluar</a></BUTTON></div>
                    <hr>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/-Fixed-Navbar-start-with-transparency-background-BS4-.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>
