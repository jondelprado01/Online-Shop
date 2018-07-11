<!DOCTYPE html>

<?php

  session_start();

?>

<html lang="en" dir="ltr">
  <head>
    <!-- HEADER -->
    <?php require 'pages/parts/common/head.php'; ?>
    <!--  -->
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php require 'pages/parts/common/navigation.php'; ?>
    <!--  -->

    <!-- BODY -->
    <div class="container-fluid mw-100 mh-100">
      <!-- CATEGORIES -->
      <div class="row justify-content-center">
        <div class="col-md col-sm-4 col-6 py-3">
          <p class="text-center my-0"><strong>Components</strong></p>
          <div id="thumbnail" class="container">
            <img class="image mw-100" src="assets/img/components.jpg">
            <a class="btn btn-warning p-1 appear-on-hover" type="button">Display Contents</a>
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
      <div class="d-flex justify-content-center align-items-center py-3 my-3 bg-light">
        <div  class="bg-warning px-3 py-2 rounded">
          <a class="h5 text-light" href="#"><strong>View All Available Discounts</strong><a>

        </div>
      </div>
      <hr>

      <!-- FOOTER -->
      <?php require 'pages/parts/common/footer.php'; ?>

    </div>
    <!-- BODY END -->

  </body>
</html>
