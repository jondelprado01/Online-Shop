<!DOCTYPE html>

<?php

  session_start();

?>

<html lang="en" dir="ltr">
  <head>
    <?php

      require 'pages/parts/common/head.php';

    ?>
  </head>
  <body>

<!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark my-0 py-0 rounded-bottom">
    <!-- BRAND AND COLLAPSE BUTTON -->
    <a class="navbar-brand text-light" href="#">Online Shop</a>
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
          <a href="pages/order-tracking.html" class="nav-link text-light">Track Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Cart</a>
        </li>

        <?php

          if (isset($_SESSION['name'])) {
            $currentUser = $_SESSION['name'];
            $currentUserFullname = $_SESSION['fullname'];
            $currentUserMobile = $_SESSION['mobile'];

        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $currentUser ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><?php echo $currentUserFullname ?></a>
              <a class="dropdown-item" href="#"><?php echo $currentUserMobile ?></a>
              <div class="dropdown-divider"></div>
              <!-- <li class="nav-item active"> -->
                <a href="session-destroyer.php" class="nav-link text-black">Logout</a>
              <!-- </li> -->
            </div>
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

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact Us
              </a>
              <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
                <i><a class="dropdown-item" href="#">0912 345 6789</a></i>
                <a class="dropdown-item" href="#">onlineshop.com</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Address:</a>
                <a class="dropdown-item" href="#">Metro Manila</a>
                <a class="dropdown-item" href="#">NCR, Philippines</a>
              </div>
            </li>

        <?php
          }

        ?>

      </ul>
      <!--  -->
    </div>
  </nav>
<!-- HEADER END -->

<!-- BODY -->
  <div class="container-fluid mw-100 mh-100">
    <!-- CATEGORIES -->
    <div class="row justify-content-center">
      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Components</strong></p>
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/components.jpg">
          <a href="pages/category.php" class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>

      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <p class="text-center my-0"><strong>Peripherals</strong></p>
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/peripherals.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>

      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Network Hardwares</strong></p>
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/net.png">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>

      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <p class="text-center my-0"><strong>Laptops</strong></p>
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/laptops.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>

      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Accessories</strong></p>
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
    </div>
    <!--  -->

    <!-- DISCOUNTED ITEMS -->
    <div class="d-flex bg-info text-light pt-2 px-3 rounded">
      <h5><strong>Discounted Items</strong><h5>
    </div>
    <div class="row justify-content-center">
      <div class="col-md col-sm-4 col-6 py-3">
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">Item Name GTX-90000 RGB XYZ fgh lfzh kdgfdgf jhkjh hkjhz</p>
        <p class="text-center text-muted my-0"><s>30,000php</s> <strong>21,000php</strong></p>
        <p class="text-center text-danger my-0"><strong>30% OFF</strong></p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">Item Name GTX-90000 RGB XYZ fgh lfzh kdgfdgf jhkjh hkjhz</p>
        <p class="text-center text-muted my-0"><s>30,000php</s> <strong>21,000php</strong></p>
        <p class="text-center text-danger my-0"><strong>30% OFF</strong></p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">Item Name GTX-90000 RGB XYZ fgh lfzh kdgfdgf jhkjh hkjhz</p>
        <p class="text-center text-muted my-0"><s>30,000php</s> <strong>21,000php</strong></p>
        <p class="text-center text-danger my-0"><strong>30% OFF</strong></p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">Item Name GTX-90000 RGB XYZ fgh lfzh kdgfdgf jhkjh hkjhz</p>
        <p class="text-center text-muted my-0"><s>30,000php</s> <strong>21,000php</strong></p>
        <p class="text-center text-danger my-0"><strong>30% OFF</strong></p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <div id="thumbnail" class="container">
          <img class="image mw-100" src="assets/img/accessories.jpg">
          <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
        </div>
        <p class="text-center text-muted my-0">Item Name GTX-90000 RGB XYZ fgh lfzh kdgfdgf jhkjh hkjhz</p>
        <p class="text-center text-muted my-0"><s>30,000php</s> <strong>21,000php</strong></p>
        <p class="text-center text-danger my-0"><strong>30% OFF</strong></p>
      </div>
    </div>
    <!--  -->
    <div class="d-flex justify-content-center align-items-center my-3">
      <div  class="bg-warning px-3 py-2 rounded">
        <a class="h5 text-light" href="#"><strong>View All Available Discounts</strong><a>

      </div>
    </div>
    <hr>

    <!-- Footer -->
    <?php require 'pages/parts/common/footer.php'; ?>

  </div>
<!-- BODY END -->

  </body>
</html>
