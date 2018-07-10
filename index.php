<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <?php require 'pages/parts/common/head.php'; ?>

  </head>

  <body>

    <!-- Header -->
    <?php require 'pages/parts/common/navigation.php'; ?>

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
