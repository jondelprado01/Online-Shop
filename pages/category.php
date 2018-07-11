<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
  <link href="../assets/css/bootstrap-4.0.0.min.css" rel="stylesheet">
  <link href="../assets/css/login-style.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../assets/css/alertify.min.css" rel="stylesheet"/>
  <link href="../assets/css/default.min.css" rel="stylesheet"/>
  <link href="../assets/css/semantic.min.css" rel="stylesheet"/>

  <script src="../assets/js/jquery.min.js"></script>
  <!-- <script src="assets/js/bootstrap.min.js"></script> -->
  <script src="../assets/js/bootstrap-4.0.0.min.js"></script>
  <script src="../assets/js/alertify.min.js"></script>
  <script src="../assets/js/popper.js"></script>

  <title>Online Shop</title>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark my-0 py-0 rounded-bottom">
    <!-- BRAND AND COLLAPSE BUTTON -->
    <a href="../index.php" class="navbar-brand text-light">Online Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- SEARCH BAR -->
      <form class="input-group form-inline input-group-sm w-50 my-2 mx-sm-auto">
        <input class="form-control mr-sm-0" type="search" placeholder="" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-outline-white my-2 my-sm-0" type="submit">Search</button>
          </div>
      </form>
      <!--  -->
      <!-- NAVIGATION -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Track Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Cart</a>
        </li>

        <?php

        if (isset($_SESSION['name'])) {
          $currentUser = $_SESSION['name'];
          ?>
          <li class="nav-item active">
            <a href="#" class="nav-link text-light"><?php echo $currentUser ?></a>
          </li>

          <li class="nav-item active">
            <a href="session-destroyer.php" class="nav-link text-white">Logout</a>
          </li>
          <?php
        }
        else {
          ?>
          <li class="nav-item active">
            <a href="login.php" class="nav-link text-light">Login</a>
          </li>

          <li class="nav-item active">
            <a href="signup.php" class="nav-link text-white">Signup</a>
          </li>
          <?php
        }

         ?>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact US
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

    <div class="container">
      <div>
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
              <li class="breadcrumb-item active">Components</li>
              <li class="breadcrumb-item active">All Items</li>
          </ul>
      </div>

      <div class="row">

        <!-- <div class="form-group col-md-6">
          <label for="sel1">Platform:</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="sel1">Socket:</label>
          <select class="form-control" id="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div> -->

      </div>

      <div class="row">

        <div class="col-md-2 col-sm-12">

          <div>
              <a href="#" class="list-group-item active">Components
              </a>
              <ul class="list-group">

                <li class="list-group-item dropdown">

                    <a style="color: black;" href="#">Motherboard</a>
                    <div class="dropdown-content">
                      <a href="#">AMD Socket</a>
                      <a href="#">Intel Socket</a>
                    </div>

                </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">CPU</a>
                      <div class="dropdown-content">
                        <a href="#">AMD</a>
                        <a href="#">Intel</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">GPU</a>
                      <div class="dropdown-content">
                        <a href="#">AMD Radeon</a>
                        <a href="#">Nvidia</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">RAM</a>
                      <div class="dropdown-content">

                        <div class="dropdown2">
                          <a href="login.html">Lodimm</a>
                          <div class="dropdown-content2">
                            <a href="#">DDR4</a>
                            <a href="#">DDR3</a>
                          </div>
                      </div>

                        <a href="#">Sodimm</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">PSU</a>
                      <div class="dropdown-content">
                        <a href="#">300-600 watts</a>
                        <a href="#">700-1000 watts</a>
                        <a href="#">1000-15000 watts</a>
                      </div>

                  </li>

                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">Hard Drive</a>
                      <div class="dropdown-content">
                        <div class="dropdown2">
                          <a href="#">Internal</a>
                          <div class="dropdown-content2">
                            <a href="#">Desktop 3.5"</a>
                            <a href="#">Mobile 2.5"</a>
                          </div>
                        </div>
                        <a href="#">External/Portable</a>
                        <a href="#">Solid State Drive</a>
                      </div>

                  </li>


                  <li class="list-group-item dropdown">

                      <a style="color: black;" href="#">Chassis</a>
                      <div class="dropdown-content">
                        <a href="#">Full Tower</a>
                        <a href="#">Mid Tower</a>
                        <a href="#">Mini Tower</a>
                        <a href="#">Cube</a>
                      </div>

                  </li>

              </ul>
          </div>

        </div>

        <div class="col-md-10">

          <div class="row">

            <?php

              require '../connection.php';

              $result = mysqli_query($conn, "SELECT * FROM product_table");

              while ($row = mysqli_fetch_array($result)) {
                $product_img = $row['product_img_path'];
                $product_name = $row['product_name'];
                $product_price = $row['product_price'];
                $product_brand_id = $row['brand_id'];

                $retrieveBrand = mysqli_query($conn, "SELECT brand_name FROM brand_table
                                 WHERE brand_id = '$product_brand_id'");

                while ($row2 = mysqli_fetch_array($retrieveBrand)) {
                  $product_brand = $row2['brand_name'];
                }

                ?>

            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                  <img style="height: 200px; width: 250px" class="image" src="<?php echo "../$product_img" ?>" alt="" />
                  <div class="caption">
                      <h3><a href="#"><?php echo $product_name ?></a></h3>
                      <p>Price : <strong><?php echo $product_price ?></strong>  </p>
                      <p><?php echo $product_brand ?></p>
                      <p><a href="#" class="btn btn-success" role="button">Add To Cart</a>
                        <a target="_blank" href="#" class="btn btn-primary" role="button">See Details</a></p>
                  </div>
                  <div class="middle">
                    <a href="#" class="btn btn-warning" role="button">Check Item</a></p>
                  </div>
                </div>
            </div>

          <?php
            }

          ?>

        </div>

        </div>

      </div>

    </div><br>

    <?php

      require 'parts/common/footer.php';

    ?>

</body>
</html>
