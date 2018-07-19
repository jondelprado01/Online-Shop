<!DOCTYPE html>

<?php

  session_start();

?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
  <link href="assets/css/bootstrap-4.0.0.min.css" rel="stylesheet">
  <link href="assets/css/login-style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/alertify.min.css" rel="stylesheet"/>
  <link href="assets/css/default.min.css" rel="stylesheet"/>
  <link href="assets/css/semantic.min.css" rel="stylesheet"/>

  <script src="assets/js/jquery.min.js"></script>
  <!-- <script src="assets/js/bootstrap.min.js"></script> -->
  <script src="assets/js/bootstrap-4.0.0.min.js"></script>
  <script src="assets/js/alertify.min.js"></script>
  <script src="assets/js/popper.js"></script>

  <title>Online Shop</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark my-0 py-0 rounded-bottom">
    <!-- BRAND AND COLLAPSE BUTTON -->
    <a href="index.php " class="navbar-brand text-light">Online Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- SEARCH BAR -->
      <!-- <form class="input-group form-inline input-group-sm w-50 my-2 mx-sm-auto">
        <input class="form-control mr-sm-0" type="search" placeholder="" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
          </div>
      </form> -->
      <!--  -->
      <!-- NAVIGATION -->
      <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact Us
            </a>
            <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">0912 345 6789</a>
              <a class="dropdown-item" href="#">onlineshop.com</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Address:</a>
              <a class="dropdown-item" href="#">Metro Manila</a>
              <a class="dropdown-item" href="#">NCR, Philippines</a>
            </div>
          </li>
      </ul>
      <!--  -->
    </div>
  </nav><br>


  <div class="row pb-3">
    <div class="col-3">
      <!--  -->
    </div>
    <div class="col container bg-secondary p-3 rounded">
      <div class="container bg-white p-3 rounded">
        <div class="row d-flex justify-content-center">
          <h5 class="text-center d-inline-flex bg-info  px-3 py-2 mx-3 mt-auto pb-0 text-light rounded">Please login your account to start shopping online!</h3>
        </div>
        <div class="row d-flex justify-content-center">
          <img src="assets/img/login.gif" alt="Avatar" class="d-inline-flex avatar h-100 mw-100">
        </div>
        <div class="row pt-3 mx-0">
          <!-- ACCOUNT LOGIN -->
          <form method="post" autocomplete="off">
            <div class="col-md col-12">

              <div class="row mx-auto ">
                <p class="text-center">Login using your Onlineshop Account.</p>
              </div>

              <div class="row p-1">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">Clear</button>
                  </div>
                </div>
              </div>

              <div class="row p-1">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">Clear</button>
                  </div>
                </div>
              </div>

              <div class="row p-1">
                <div class="col px-0 mr-1">
                  <button type="submit" class="btn btn-success btn-block" name="btn-login">Login</button>
                </div>
                <div class="col px-0 ml-1">
                  <a type="button" class="btn btn-primary btn-block text-white" href="signup.php">Signup</a>
                </div>
              </div>
            </div>

        </form>
          <!--  -->

          <!-- SOCIAL MEDIA ACCOUNT LOGIN -->
          <div class="col-md col-12">
            <div class="row mx-auto">
              <p class="text-center">Or using your social media accounts:</p>
            </div>
            <div class="row p-1">
              <button type="button" name="facebook" class="btn btn-primary btn-block"><span class="fa fa-facebook-square"></span> Facebook</button>
            </div>

            <div class="row p-1">
              <button type="button" name="facebook" class="btn btn-danger btn-block"><span class="fa fa-google-plus-square"></span> Google+</button>
            </div>
          </div>
          <!--  -->
        </div>

        </div>
      </div>
      <div class="col-3">
        <!--  -->
      </div>
  </div>

<?php

  if (isset($_POST['btn-login'])) {
    require 'pages/parts/post/login-authentication.php';
  }

  require 'pages/parts/common/footer.php';

?>

</body>
</html>
