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

<div class="center">

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

        <p class="text-center" style="font-style: italic; color: blue;">Or Login using your social media accounts:</p>

        <div class="row">
          <button type="button" name="facebook" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"><span class="fa fa-facebook-square"></span> Facebook</button>
        </div>

        <div class="row">
          <button type="button" name="facebook" class="btn btn-danger col-md-12 col-sm-12 col-xs-12"><span class="fa fa-google-plus-square"></span> Google+</button>
        </div>

      </div>

    </div>

  </form>

</div><br>

<?php

  if (isset($_POST['btn-login'])) {
    require 'pages/parts/post/login-authentication.php';
  }

  require 'pages/parts/common/footer.php';

?>

</body>
</html>
