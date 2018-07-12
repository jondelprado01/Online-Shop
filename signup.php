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

<div class="form-row">
  <div class="col-2">
    <!--  -->
  </div>
  <div class="col container bg-secondary rounded p-3">
    <div class="container bg-light p-3">
      <br>
      <p class="text-center h3">Create an <b>Online Shop</b> account to start shopping online!</p>
      <br>
      <p class="text-left text-muted px-3"> Personal Information</p>
      <div class="row px-3">
        <div class="col-md-4 col-12">
          <div class="form-group">
            <label for="first-name">First Name <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
          </div>
        </div>
        <!--  -->
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for"last-name">Last Name <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for"middle-name">Middle Name</label>
            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="bday">Date of Birth <i class="fa fa-asterisk"></i></label>
            <input type="date" class="form-control" name="bday" value="" required>
          </div>
        </div>
        <div class="col-md-8 col-6">
          <label for="gender">Gender <i class="fa fa-asterisk"></i></label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
            <label class="form-check-label" for="female">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>
        <!--  -->
        <div class="col-12">
          <hr>
        </div>
        <!--  -->
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="house-block-lot">House/Block/Lot No. <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="lot" placeholder="House/Block/Lot No." required>
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="street">Street <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="street" placeholder="Street">
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="barangay">Barangay <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="barangay" placeholder="Barangay">
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="city">City <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="city" placeholder="City">
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="zipcode">Zipcode <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
          </div>
        </div>
        <div class="col-md-4 col-6">
          <div class="form-group">
            <label for="country">Country <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="country" placeholder="Country">
          </div>
        </div>
        <!--  -->
        <div class="col-12">
          <hr>
        </div>
        <!--  -->
        <div class="col-md-4">
          <div class="form-group">
            <label for="e-mail">Email Address <i class="fa fa-asterisk"></i></label>
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" class="form-control" name="telephone" placeholder="Telephone">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="mobile">Mobile <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="username">Username <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password <i class="fa fa-asterisk"></i></label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        </div>
        <!--  -->
        <div class="col-12">
          <hr>
        </div>
        <!--  -->
        <div class="col-12">

          <?php

            require 'pages/parts/modals/conditions.php';

           ?>

           <div class="row">
             <div class="col-12 text-center">
               <label class="checkbox-inline"><input type="checkbox" value="terms-and-conditions"><i> I accept Online Shop's Terms & Conditions</i></label><br>
               <a href="" data-toggle="modal" data-target="#newCategory">See Terms & Conditions</a>
             </div>
             <div class="col-12">
               <br>
             </div>
             <div class="col-12 text-center">
               <input type="submit" class="btn btn-success btn" name="btn-save" value="Sign Up">
             </div>
           </div>
        </div>
        <!--  -->
        <br>
      </div>
    </div>
  </div>
  <!--  -->
  <div class="col-2">
    <!--  -->
  </div>
</div>

<br>

<?php

  if (isset($_POST['btn-signup'])) {
    require 'pages/parts/post/new-customer.php';

  }


  require 'pages/parts/common/footer.php';

 ?>

</body>
</html>
