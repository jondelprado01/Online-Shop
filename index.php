<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <?php require 'pages/parts/common/head.php'; ?>

  </head>

  <body>

    <!-- Navigation -->
    <?php require 'pages/parts/common/navigation.php'; ?>

    <div class="container">

      <div class="row">

        <div id="mi-slider" class="mi-slider col-md-12">
            <ul class="item-cont">

                <li><a href="pages/category.html">
                    <img class="item-comp" src="assets/ItemSlider/images/mobo.jpg" alt="img01">
                </a></li>

                <li><a href="#">
                    <img class="item-comp" src="assets/ItemSlider/images/cpu.png" alt="img02">
                </a></li>

                <li><a href="#">
                    <img class="item-comp" src="assets/ItemSlider/images/gpu.jpg" alt="img03">
                </a></li>

                <li><a href="#">
                    <img class="item-comp" src="assets/ItemSlider/images/ram.jpg" alt="img04">
                </a></li>

            </ul>

            <ul>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4>
                </a></li>
            </ul>
            <ul>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/9.jpg" alt="img09"><h4>Casual</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/10.jpg" alt="img10"><h4>Luxury</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/11.jpg" alt="img11"><h4>Sport</h4>
                </a></li>
            </ul>
            <ul>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                </a></li>
            </ul>
            <ul>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                </a></li>
                <li><a href="#">
                    <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                </a></li>
            </ul>
            <nav>
                <a href="#">PC</a>
                <a href="#">Laptops</a>
                <a href="#">Smartphones</a>
                <a href="#">Consoles</a>
            </nav>
        </div>

        <div id="myCarousel" class="carousel slide carousel-fade" data-interval-"false" data-ride="carousel">
          <!-- Indicators -->
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
