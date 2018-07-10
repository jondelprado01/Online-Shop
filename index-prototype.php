<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sample Web System</title>
    <!-- Bootstrap core CSS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap-4.0.0.min.js"></script>
    <link href="assets/css/bootstrap-4.0.0.min.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style-prototype.css" rel="stylesheet" />
    <title>Online Shop</title>
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
          <a class="nav-link text-light" href="#">Track Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Cart</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light" href="#">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#"><strong>Sign Up</strong><span class="sr-only">(current)</span></a>
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
  </nav>
<!-- HEADER END -->

<!-- BODY -->
  <div class="container-fluid mw-100 mh-100">
    <!-- CATEGORIES -->
    <div class="row justify-content-center">
      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Components</strong></p>
        <img class="image mw-100" src="assets/img/components.jpg">
        <a class="btn btn-warning p-1 d-inline-block appear-on-hover" type="button">Display Contents</a>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <p class="text-center my-0"><strong>Peripherals</strong></p>
        <img class="image mw-100" src="assets/img/peripherals.jpg">
        <a class="btn btn-warning p-1 d-inline-block appear-on-hover" type="button">Display Contents</a>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Network Hardwares</strong></p>
        <img class="image mw-100" src="assets/img/net.png">
        <a class="btn btn-warning p-1 d-inline-block appear-on-hover" type="button">Display Contents</a>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <p class="text-center my-0"><strong>Laptops</strong></p>
        <img class="image mw-100" src="assets/img/laptops.jpg">
        <a class="btn btn-warning p-1 d-inline-block appear-on-hover" type="button">Display Contents</a>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <p class="text-center my-0"><strong>Accessories</strong></p>
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-block appear-on-hover" type="button">Display Contents</a>
        <p class="text-center text-muted my-0">XX Brands</p>
        <p class="text-center text-muted my-0">XXXXX Items in Stock</p>
      </div>
    </div>
    <!--  -->
    <!-- DISCOUNTED ITEMS -->
    <div class="d-flex bg-info text-light pt-2 px-3">
      <h5><strong>Discounted Items</strong><h5>
    </div>
    <div class="row justify-content-center">
      <div class="col-md col-sm-4 col-6 py-3">
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-blocka appear-on-hover" type="button">Display Contents</a>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-blocka appear-on-hover" type="button">Display Contents</a>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-blocka appear-on-hover" type="button">Display Contents</a>
      </div>
      <div class="col-md col-sm-4 col-6 py-3 bg-light">
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-blocka appear-on-hover" type="button">Display Contents</a>
      </div>
      <div class="col-md col-sm-4 col-6 py-3">
        <img class="image mw-100" src="assets/img/accessories.jpg">
        <a class="btn btn-warning p-1 d-inline-blocka appear-on-hover" type="button">Display Contents</a>
      </div>
    </div>
    <!--  -->
    <div class="d-flex justify-content-center align-items-center pt-bg-2">
      <div  class="bg-warning px-3 py-2 rounded">
        <a class="h5 text-light" href="#"><strong>View All Available Discounts</strong><a>

      </div>
    </div>
    <hr>
    <div class="bg-secondary text-light pt-2 px-3">
    </div>

    <!-- Footer -->
    <?php require 'pages/parts/common/footer.php'; ?>

  </div>
<!-- BODY END -->

  </body>
</html>
