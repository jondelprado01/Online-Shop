<!DOCTYPE html>
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

<div class="row">
  <div class="col-2">
    <!--  -->
  </div>
  <div class="col container bg-secondary rounded p-3">
    <div class="container bg-light p-3">
      <p class="text-center h3">Create an <b>Online Shop</b> account to start shopping online!</p>
      <br>
      <br>
      <p class="text-left text-muted px-3"> Personal Information</p>
      <div class="row px-3">
        <div class="col-md-4">
          <div class="form-group">
            <label for="first-name">First Name <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for"last-name">Last Name <i class="fa fa-asterisk"></i></label>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for"middle-name">Middle Name</label>
            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" required>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-2">
    <!--  -->
  </div>
</div>

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
