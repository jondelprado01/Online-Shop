<!DOCTYPE html>
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

      <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add to Cart</h4>
       </div>
       <div class="modal-body">

         <div class="row">

           <div class="col-md-3 col-sm-12">

               <!-- <div class="col-md-12"> -->

                 <img style="height: 100px; width:100px;" src="../assets/img/products/mobo/msi-godlike.jpg" alt="" />
               <!-- </div> -->

           </div>
           <div class="col-md-3 col-sm-12">
               <p><strong>MSI Z370 Godlike Gaming</strong></p>
               <p>Motherboard for Intel 8th Gen Processors</p>
               <p style="color: green; font-size: large"><strong>PHP 29,340</strong>  </p>
           </div>

           <div class="col-md-6 col-sm-12">
             <div class="row">
             <div class="col-md-6">
               Total:
             </div>

             <div class="col-md-6 col-sm-12">
               Php: 29,340
             </div>
           </div>
             <div class="row">
             <div class="col-md-6 col-sm-12">
               <button type="button" class="form-control btn-warning" name="button"
               data-toggle="modal" data-target="#myModal">Remove</button>
             </div>

             <div class="col-md-6 col-sm-12">
               <button type="button" class="form-control btn-success" name="button"
               data-toggle="modal" data-target="#myModal">Checkout</button>
             </div>
           </div>
           </div>

         </div>

         <hr>

         <div class="row">

           <div class="col-md-6 col-sm-6">
             <h4 style="font-style: italic; color: green;">? Item(s) currently added in your Cart</h4>
           </div>

           <div class="col-md-6 col-sm-6">
             <h4><strong>Your Shopping Cart (? Items)</strong></h4>
           </div>

         </div>

       </div>
       <!-- <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div> -->
     </div>

   </div>
 </div>

      <div>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="components.php">Components</a></li>
              <li class="breadcrumb-item"><a href="#">Motherboard</a></li>
              <li class="breadcrumb-item active">MSI</li>
          </ol>
      </div>

      <div class="row">

        <div class="col-md-2">

          <h3 style="text-align: center;"><strong>Advisory</strong></h3>
          <ul class="advisory">
            <li style="font-size: 13px;">Always inquire for stock availability. Some items are order basis from the supplier.</li>
            <li style="font-size: 13px;">Cheque payments are subject to 3 banking days clearing.</li>
            <li style="font-size: 13px;">30% downpayment is required for order basis and/or reservation.</li>
            <li style="font-size: 13px;">Images posted are for reference only. Actual product may vary.</li>
          </ul>

        </div>

        <div class="col-md-6">

          <div class="row">
            
            <div class="col-md-12">
              <img id="item-photo" style="height: 600px; width:500px;" src="../assets/img/products/mobo/msi-godlike.jpg" alt="" />
            </div>

          </div><br>

          <!-- <a href="#" class="menulink">hit</a> -->
          <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-3">
              <img class="menulink" style="height: 80px; width:80px" src="../assets/img/products/mobo/msi-godlike.jpg" alt="">
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
              <img class="menulink2" style="height: 80px; width:80px" src="../assets/img/products/mobo/msi-godlike2.jpg" alt="">
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
              <img class="menulink3" style="height: 80px; width:80px" src="../assets/img/products/mobo/msi-godlike3.jpg" alt="">
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
              <img class="menulink4" style="height: 80px; width:80px" src="../assets/img/products/mobo/msi-godlike4.jpg" alt="">
            </div>

          </div>
        </div>

        <div class="col-md-4">

          <div class="row">

            <div class="col-md-8">
              <p style="font-size: 25px"><strong>MSI Z370 Godlike Gaming</strong></p>
            </div>

            <div class="col-md-4">
              <p style="color: green; font-size: large"><strong>PHP 29,340</strong>  </p>
            </div>

          </div><br>

          <div class="row">

            <div class="row">

              <div class="col-md-12">

                <p style="font-size: 20px; color:blue"><strong>Product Description</strong></p>

                <ul class="description">
                  <li>Supports 8th Gen Intel® Core™ / Pentium® / Celeron® processors for LGA 1151 socket</li>
                  <li>Supports DDR4-4133+(OC) Memory</li>
                  <li>Lightning Fast Game experience: Triple Turbo M.2 with M.2 Shield V2, Turbo U.2 with Steel Armor, Lightning USB 3.1 Gen2 with front gen 2 type-C.</li>
                  <li>DDR4 Boost with Steel Armor: Fully isolated and shielded DIMM slots to protect DDR4 modules and delivers pure data signals for best gaming and overclocking.</li>
                  <li>MULTI-GPU: Supports NVIDIA SLI™ and AMD CrossFire™ with optimal slot placement for the best airflow.</li>
                </ul>

              </div>

            </div>

            <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group text-center">
                  <label>Quantity:</label>
                  <input type="number" class="form-control" id="usr" min="1" value="1"><br>
                  <button type="button" class="form-control btn-primary" name="button" class="btn btn-primary"
                  data-toggle="modal" data-target="#myModal">Add To Cart</button>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div><br>

    <!-- /.container -->
    <?php

      require 'parts/common/footer.php';

    ?>

</body>
</html>


<script>

$(function() {
  $('.menulink').hover(function(){
    $("#item-photo").attr('src',"../assets/img/products/mobo/msi-godlike.jpg");
    return false;
  });

  $('.menulink2').hover(function(){
    $("#item-photo").attr('src',"../assets/img/products/mobo/msi-godlike2.jpg");
    return false;
  });
  $('.menulink3').hover(function(){
    $("#item-photo").attr('src',"../assets/img/products/mobo/msi-godlike3.jpg");
    return false;
  });

  $('.menulink4').hover(function(){
    $("#item-photo").attr('src',"../assets/img/products/mobo/msi-godlike4.jpg");
    return false;
  });
});


</script>
