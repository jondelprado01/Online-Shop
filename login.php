<!DOCTYPE html>

<?php

  session_start();

?>

<html>
<head>
<?php

  require 'pages/parts/common/head.php';

?>
</head>
<body>

<?php

  require 'pages/parts/common/navigation.php';

?>


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
              <button type="button" class="btn btn-primary btn-block"> <a href="signup.php" style="color: white;">Signup</a> </button>
            </div>
          </div>
        </div>
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

<!-- <div class="center">

  <h3 class="text-center">Please login your account to start shopping online!</h3>

  <form method="post" autocomplete="off">

    <div class="imgcontainer">

      <img src="assets/img/login.gif" alt="Avatar" class="avatar">

    </div>

    <div class="row">

      <div class="col-md-6 col-sm-6 col-xs-12">

        <p><i>Please Enter your Username and Password correctly:</i></p>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
        </div>

        <div class="row">

          <div class="col">
            <button type="submit" class="btn btn-success col-md-12" name="btn-login">Login</button>
          </div>

          <div class="col">
            <button type="button" class="btn btn-primary col-md-12"> <a href="signup.php" style="color: white;">Signup</a> </button>
          </div>

        </div><br>

        <div class="row">
            <a href="#" class="col-md-12 col-sm-12 col-xs-12 text-center">Forgot Password?</a>
        </div>


      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 accounts">



      </div>

    </div>

  </form>

</div><br> -->

<?php

  if (isset($_POST['btn-login'])) {
    require 'pages/parts/post/login-authentication.php';
  }

  require 'pages/parts/common/footer.php';

?>

</body>
</html>
