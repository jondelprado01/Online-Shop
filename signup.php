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

<div class="form-row">
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
