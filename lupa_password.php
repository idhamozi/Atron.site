<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ATRON - LUPA PASSWORD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/-Fixed-Navbar-start-with-transparency-background-BS4-.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50" style="height: 416px;">
                    <h2 class="text-info font-weight-light mb-5" style="background-position: center;"><i class="icon ion-clipboard"></i>&nbsp;ATRON Fasilkom</h2>
                    <form method="post" action="proseslupa_password.php">
                        <div class="form-group">
                          <label class="text-secondary">NPM</label>
                          <input name="npm" class="form-control" type="text" required  >
                        </div>
                        <div class="form-group">
                          <label class="text-secondary">EMAIL</label>
                          <input name="email" class="form-control" type="email" required  >
                        </div>
                        <div class="form-group">
                          <label class="text-secondary">Password Baru</label>
                          <input name="password" class="form-control" type="password" required>
                        </div>
                        <div class="form-group">
                          <label class="text-secondary">Konfirmasi Password Baru</label>
                          <input name="password_asli" class="form-control" type="password" required>
                        </div>
                        <button class="btn btn-info mt-2" type="submit">Simpan Perubahan</button>
                      </form>
                  </div>
                </div>
          <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image: url(&quot;dashboard/images/gedung-fik3.jpg&quot;);background-size: cover;background-position: center center;">
            <p class="ml-auto small text-white mb-2"><em>Photo by ATRON Fasilkom</em><br></p>
          </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/-Fixed-Navbar-start-with-transparency-background-BS4-.js"></script>
</body>

</html>
