<?php

  include 'classes/database-class.php';
  include 'classes/view-class.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC | Online Shop</title>
    <link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main-style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap-3.3.7.min.js"></script>
  </head>
  <body>


    <nav class="navbar navbar-default navbar-fixed-top" id="main-navbar">
      <div class="container">

        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible" type="button" name="button">
            <span class="glyphicon glyphicon-list"></span>
          </button>
          <a class="navbar-brand" href="index2.php">PC Online Shop</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapsible">

          <ul class="nav navbar-nav navbar-left">

            <li> <a href="index2.php"> <span class="glyphicon glyphicon-home"></span> Home</a> </li>

            <li>
              <a class="menu-btn" href="#"> <span class="glyphicon glyphicon-list"></span> Browse Categories</a>
            </li>
          </ul>


          <form class="navbar-form navbar-left" action="index.html" method="post">
            <div class="form-group">
              <!-- <select class="form-control" name="category">
                <option value="">-Select Category-</option>
                <option value="">Components</option>
                <option value="">Peripherals</option>
                <option value="">Accessories</option>
                <option value="">Laptops</option>
              </select> -->

              <input class="form-control" type="text" name="search" placeholder="Search">
            </div>
            <button class="btn btn-info" type="submit" name="button"><span class="glyphicon glyphicon-search"></span> Search</button>
          </form>

          <ul class="nav navbar-nav navbar-right">

            <li> <a href="index2.php"> <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>
            <li> <a href="index2.php"> <span class="glyphicon glyphicon-heart"></span> Wishlist</a> </li>
            <li> <a href="index2.php"> <span class="glyphicon glyphicon-phone"></span> Contact</a> </li>

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-user"></span> Login</a>
              <ul class="dropdown-menu">

              </ul>
            </li>
          </ul>

        </div>

        <div class="category-menu">

            <ul class="nav navbar-nav category-nav">

              <?php

              $group = new View;
              $group->listGroup();

              ?>

            </ul>

        </div>

      </div>

    </nav>



    <section class="main-container">

      <div class="container">

        <div class="row">

          <div id="myCarousel" class="carousel slide col-md-8 col-xs-12" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

              <div class="item active">
                <img src="assets/img/components.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Los Angeles</h3>
                  <p>LA is always so much fun!</p>
                </div>
              </div>

              <div class="item">
                <img src="assets/img/accessories.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                </div>
              </div>

              <div class="item">
                <img src="assets/img/peripherals.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We love the Big Apple!</p>
                </div>
              </div>

            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="page-header news-box">
          <h3>On Sale Now</h3>
        </div>

        <div class="row">

          <div class="col-md-4 text-center col-sm-6 col-xs-6">

              <div class="thumbnail product-box col-md-12 col-xs-12">

                <div class="col-md-12 col-xs-12">
                  <img class="product-img" src="assets/img/products/gpu/msi-gamingx.png" alt="" />
                </div>

                <div class="caption col-md-12 col-xs-12">
                    <h3>MSI GTX 1080 Ti Gaming X</h3>

                    <div class="product-price col-md-6">

                      <p><s>Php 30,000</s></p>
                      <h4>Php 35,000</h4>
                    </div>

                    <div class="product-tag">
                      <p>GPU / MSI / Nvidia</p>
                    </div>
                </div>

                <div class="sale-logo">
                  <img style="height: 80px; width: 80px" class="sale-img" src="assets/img/sale-icon.png" alt="" />
                </div>

              </div>

              <div class="thumbnail-menu col-md-12">
                <p><a href="#" class="btn btn-success" role="button"> <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</a>
                  <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-eye-open"></span> See Details</a></p>
                </div>
          </div>

          <div class="col-md-4 text-center col-sm-6 col-xs-6">

              <div class="thumbnail product-box col-md-12 col-xs-12">

                <div class="col-md-12 col-xs-12">
                  <img class="product-img" src="assets/img/products/gpu/msi-gamingx.png" alt="" />
                </div>

                <div class="caption col-md-12 col-xs-12">
                    <h3>MSI GTX 1080 Ti Gaming X</h3>

                    <div class="product-price col-md-6">

                      <p><s>Php 30,000</s></p>
                      <h4>Php 35,000</h4>
                    </div>

                    <div class="product-tag">
                      <p>GPU / MSI / Nvidia</p>
                    </div>
                </div>

                <div class="sale-logo">
                  <img style="height: 80px; width: 80px" class="sale-img" src="assets/img/sale-icon.png" alt="" />
                </div>

              </div>

              <div class="thumbnail-menu col-md-12">
                <p><a href="#" class="btn btn-success" role="button"> <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</a>
                  <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-eye-open"></span> See Details</a></p>
                </div>
          </div>

          <div class="col-md-4 text-center col-sm-6 col-xs-6">

              <div class="thumbnail product-box col-md-12 col-xs-12">

                <div class="col-md-12 col-xs-12">
                  <img class="product-img" src="assets/img/products/gpu/msi-gamingx.png" alt="" />
                </div>

                <div class="caption col-md-12 col-xs-12">
                    <h3>MSI GTX 1080 Ti Gaming X</h3>

                    <div class="product-price col-md-6">

                      <p><s>Php 30,000</s></p>
                      <h4>Php 35,000</h4>
                    </div>

                    <div class="product-tag">
                      <p>GPU / MSI / Nvidia</p>
                    </div>
                </div>

                <div class="sale-logo">
                  <img style="height: 80px; width: 80px" class="sale-img" src="assets/img/sale-icon.png" alt="" />
                </div>

              </div>

              <div class="thumbnail-menu col-md-12">
                <p><a href="#" class="btn btn-success" role="button"> <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</a>
                  <a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-eye-open"></span> See Details</a></p>
                </div>
          </div>

        </div>

      </div>


    </section>


    <footer>

      <!-- <div class="container-fluid"> -->

        <!-- <div class="row">

          <div class="col-md-12 footer-title">

            <div class="col-md-6 header-1">

              <h3>Branches</h3>

            </div>

          </div>

        </div> -->

        <div class="col-md-12 footer-box">

          <div class="row">

            <div class="col-md-6 branches-box">
              <p>
                   234, New york Street,<br />
                                  Just Location, USA<br />
                  Call: +09-456-567-890<br>
                  Email: info@yourdomain.com<br>
              </p>
            </div>

            <div class="col-md-6 social-box">
                <!-- <strong>We are Social </strong> -->
                <!-- <hr> -->
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                <p>
                    Like our Facebook Page pconlineshop. <br>Follow our Tweets at pconlineshop. <br>
                    Email us at pconlineshop@gmail.com. <br>
                </p>
            </div>

          </div>

        </div>

        <!-- </div> -->

        <div class="col-md-12 end-box">
            &copy; 2018 | &nbsp; All Rights Reserved | &nbsp; www.pconlineshop.com | &nbsp; 24x7 support | &nbsp; Email us: pconlineshop.gmail.com
        </div>


    </footer>

  </body>
</html>


<script>

  // function blink(){
  //   $(".sale-banner").delay(400).fadeTo(400,0.5).delay(400).fadeTo(400,1,blink);
  // };

  $(document).ready(function(){

    // blink();

    $(".menu-btn").click(function(e){

      $(".category-menu").slideToggle(500);

      e.preventDefault();

    });

    $(".thumbnail, .thumbnail-menu").mouseover(function(){
      $(".product-img, .caption, .sale-logo").css({
        'filter': 'blur(2px)',
        'transition': '0.5s',
        '-webkit-filter': 'linear'
      });
      $(".thumbnail-menu").css({
        'visibility': 'visible'
      });
    });

    $(".thumbnail").mouseout(function(){
      $(".product-img, .caption, .sale-logo").css({
        'filter': 'blur(0px)',
        'transition': '0.5s',
        '-webkit-filter': 'linear'
      });
      $(".thumbnail-menu").css({
        'visibility': 'hidden'
      });
    });




  });


</script>






<!-- end -->
