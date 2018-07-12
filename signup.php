<!DOCTYPE html>
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

          <li class="nav-item active">
            <a href="login.php" class="nav-link text-light">Login</a>
          </li>

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


<div class="center">

  <h3 class="text-center">Create an <b>Online Shop</b> account to start shopping online!</h3><br>

  <form method="post" autocomplete="off">

    <div class="row">

      <div class="col-md-12 col-sm-12 text-center">
        <i><strong>Personal Infomation</strong></i>
      </div><br><br>

      <div class="col-md-4">

        <div class="form-group">
          <p>First Name <i class="fa fa-asterisk"></i></p>
          <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
        </div>

      </div>

      <div class="col-md-4">

        <div class="form-group">
          <p>Last Name <i class="fa fa-asterisk"></i></p>
          <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
        </div>

      </div>

      <div class="col-md-4">

        <div class="form-group">
          <p>Middle Name</p>
          <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
        </div>

      </div>

    </div>

      <div class="row">

        <div class="col-md-6 col-sm-6">

          <div class="form-group">
            <p>Date of Birth <i class="fa fa-asterisk"></i></p>
            <input type="date" class="form-control" name="bday" value="" required>
          </div>

          </div>

          <div class="col-md-6 col-sm-6 text-center">

            <p>Gender <i class="fa fa-asterisk"></i></p>
            <label class="radio-inline"><input type="radio" name="gender" value=""> Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value=""> Female</label>

          </div>

      </div>

      <hr>

      <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>House/Block/Lot No. <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="lot" placeholder="House/Block/Lot No." required>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>Street <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="street" placeholder="Street">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>Barangay <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="barangay" placeholder="Barangay">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>City <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="city" placeholder="City">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>Zipcode <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="form-group">
            <p>Country <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="country" placeholder="Country">
          </div>
        </div>

      </div>

      <hr>

      <div class="row">

        <div class="col-md-4">

          <div class="form-group">
            <p>Email Address <i class="fa fa-asterisk"></i></p>
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>

        </div>

        <div class="col-md-4">

          <div class="form-group">
            <p>Telephone</p>
            <input type="text" class="form-control" name="telephone" placeholder="Telephone">
          </div>

        </div>

        <div class="col-md-4">

          <div class="form-group">
            <p>Mobile <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="form-group">
            <p>Username <i class="fa fa-asterisk"></i></p>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>

        </div>

        <div class="col-md-6">

          <div class="form-group">
            <p>Password <i class="fa fa-asterisk"></i></p>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>

        </div>

      </div>

      <div class="row">

        <?php

          require 'pages/parts/modals/conditions.php';

         ?>

        <div class="col-md-12 text-center">
          <label class="checkbox-inline"><input type="checkbox" value=""><i> I accept Online Shop's Terms & Conditions</i></label><br>
          <a href="" data-toggle="modal" data-target="#newCategory">See Terms & Conditions</a>
        </div>

      </div><br>

      <div class="row">

        <div class="col-md-12 text-center">
          <input type="submit" class="btn btn-success" name="btn-save" value="Save">
        </div>

      </div>

  </form>

</div><br>

<?php

  if (isset($_POST['btn-save'])) {
    require 'pages/parts/post/new-customer.php';

  }


  require 'pages/parts/common/footer.php';

 ?>

</body>
</html>
