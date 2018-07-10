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
    <link href="assets/css/style.css" rel="stylesheet" />
    <title>Online Shop</title>
  </head>
  <body>

<!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!-- BRAND AND COLLAPSE BUTTON -->
    <a class="navbar-brand text-light" href="#">Online Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--  -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- SEARCH BAR -->
      <form class="input-group form-inline w-50 ml-auto">
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
          <a class="nav-link text-light text-center" href="#">Cart</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light text-center" href="#">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#"><strong>Sign Up</strong><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact Us
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-light" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <!--  -->
    </div>
  </nav>
<!-- HEADER -->

<!-- BODY -->
  <div class="container">
    <div id="myCarousel" class="carousel slide carousel-fade" data-interval-"false" data-ride="carousel">
<!-- Indicators -->
        <div class="col-md-12">
            <div class="well well-lg offer-box text-center">


              <p style="font-family: arial">Welcome to PC Online Shop</p>
              <p>Stay updated for limited offers and discount</p>

               <!-- Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 dec ! -->

            </div>

            <div class="main box-border">

              <div class="carousel-inner">
                <div class="item active">
                  <div class="category">

                    <a href="index.php">
                      <img class="image" src="assets/img/components.jpg" style="width:100%;">

                      <div class="carousel-caption">
                        <h3 style="color:red; font-weight:bold">Components</h3>
                        <p>Click to see the list of Items</p>
                      </div>

                    </a>

                    <div class="middle">
                      <a href="pages/category.php" class="btn btn-warning" role="button">Check All Latest Components</a></p>
                    </div>

                  </div>
                </div>

                <div class="item">
                  <div class="category">

                    <a href="index.php">

                      <img class="image" src="assets/img/peripherals.jpg" style="width:100%;">

                      <div class="carousel-caption">
                        <h3 style="color:red; font-weight:bold">Peripherals</h3>
                        <p>Click to see the list of Items</p>
                      </div>

                    </a>

                  <div class="middle">
                    <a href="#" class="btn btn-warning" role="button">Check All Latest Peripherals</a></p>
                  </div>

                  </div>
                </div>

                <div class="item">
                  <div class="category">
                    <a href="index.php">

                      <img class="image" src="assets/img/net.png" style="width:100%;">

                      <div class="carousel-caption">
                        <h3 style="color:red; font-weight:bold">Net Devices</h3>
                        <p>Click to see the list of Items</p>
                      </div>

                    </a>

                    <div class="middle">
                      <a href="#" class="btn btn-warning" role="button">Check All Latest Net Devices</a></p>
                    </div>

                  </div>
                </div>

                <div class="item">
                  <div class="category">

                    <a href="index.php">

                      <img class="image" src="assets/img/laptops.jpg" style="width:100%;">

                      <div class="carousel-caption">
                        <h3 style="color:red; font-weight:bold">Laptops</h3>
                        <p>Click to see the list of Items</p>
                      </div>

                    </a>

                    <div class="middle">
                      <a href="#" class="btn btn-warning" role="button">Check All Latest Laptops</a></p>
                    </div>

                  </div>
                </div>

                <div class="item">
                  <div class="category">
                    <a href="index.php">

                    <img class="image" src="assets/img/accessories.jpg" style="width:100%;">

                    <div class="carousel-caption">
                      <h3 style="color:red; font-weight:bold">Accessories</h3>
                      <p>Click to see the list of Items</p>
                    </div>

                    </a>

                    <div class="middle">
                      <a href="#" class="btn btn-warning" role="button">Check All Latest Accessories</a></p>
                    </div>

                  </div>
                </div>


              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>

              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
              </ol>

              </div>


            </div>
        </div>

      </div>

    </div>

    <!-- Footer -->
    <?php require 'pages/parts/common/footer.php'; ?>

    <!-- Feature Scripts -->
    <?php require 'pages/parts/common/feature-scripts.php'; ?>

  </body>

</html>


<script>

$(function () {

    $('#mi-slider').catslider();

});

$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<1;i++) {
    next=next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
