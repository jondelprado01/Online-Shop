<!DOCTYPE html>

<?php

  session_start();

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php

  require 'pages/parts/common/feature-scripts.php';

?>
<title>Sample Web System</title>

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

        <button type="submit" class="btn btn-success col-md-6 col-sm-6 col-xs-6" name="btn-login">Login</button>
        <button type="button" class="btn btn-success col-md-6 col-sm-6 col-xs-6"> <a href="signup.php" style="color: white;">Signup</a> </button>

        <a href="#" type="button" class="col-md-12 col-sm-12 col-xs-12 text-center">Forgot Password?</a>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 accounts">

        <p class="text-center" style="font-style: italic; color: blue;">Or Login using your social media accounts:</p>

        <button type="button" name="facebook" class="btn btn-lg btn-primary col-md-12 col-sm-12 col-xs-12"><span class="fa fa-facebook-square"></span> Facebook</button>
        <button type="button" name="facebook" class="btn btn-lg btn-danger col-md-12 col-sm-12 col-xs-12"><span class="fa fa-google-plus-square"></span> Google+</button>

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
