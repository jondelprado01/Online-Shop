<!DOCTYPE html>

<?php

  session_start();

?>

<html lang="en">
<head>

  <?php

    require 'parts/common/head.php';

   ?>

</head>
<body>

  <?php

    require 'parts/common/navigation.php';

   ?>

    <div class="container">
      <div>
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
              <li class="breadcrumb-item active">Components</li>
              <li class="breadcrumb-item active">All Items</li>
          </ul>
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
                        <a href="item-details.php" class="btn btn-primary" role="button">See Details</a></p>
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
