<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/login-style.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<title>Sample Web System</title>

<style media="screen">

  div.banner-container{
    background-color: #91bbff;
    height: 100px;
    margin: auto;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 60%;
  }

  div.order-info{
    background-color: #b3cffc;
    height: 60px;
    margin: auto;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 60%;
  }

  div.inner-center{
    background-color: #ffffff;
    height: auto;
    margin: auto;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 20px;
    padding-bottom: 20px;
    width: 100%;
  }

  div.table-container{
    overflow-x: auto;
  }

  @media screen and (max-width: 664px) {

      div.banner-container h1{
        font-size: 20px;
      }
  }

  @media screen and (max-width: 1000px) {

      div.order-info{
        height: 120px;
      }
  }

  @media screen and (max-width: 400px) {

      div.order-info{
        height: 150px;
      }
  }

  @media screen and (max-width: 300px) {

      div.order-info{
        height: 200px;
      }
  }
</style>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><strong>Online Shop</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Track Order</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Signup</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><strong>Call: </strong>0912 345 6789/a></li>
                        <li><a href="#"><strong>Mail: </strong>pconlineshop.com</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><strong>Address: </strong>
                            <div>
                                Metro Manila<br />
                                NCR, Philippines
                            </div>
                        </a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                </div>
                &nbsp;
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="banner-container text-center">
  <h1>ORDER TRACKING</h1>
</div>

<div class="order-info">
  <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
      <p><strong>Shipped Via:</strong> <i>LBC<i></p>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <p><strong>Status:</strong> <i>Ready for Delivery<i></p>
    </div>

    <div class="col-md-4 col-sm-12 col-xs-12">
      <p><strong>Expected Date:</strong> <i>05/02/2018</i></p>
    </div>
  </div>
</div>

<div class="center">

  <div class="row">

  <div class="col-md-3 col-sm-6 col-xs-12">
    <p>Confirm Order <span style="color: yellowgreen;" class="glyphicon glyphicon-ok"></span></p>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <p>Processing Order <span style="color: yellowgreen;" class="glyphicon glyphicon-ok"></span></p>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <p>Dispatched Item <span style="color: yellowgreen;" class="glyphicon glyphicon-ok"></span></p>
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <p>Product Delivered <span style="color: red;" class="glyphicon glyphicon-remove"></span></p>
  </div>

  </div>

  <div class="progress">

    <div class="progress-bar" role="progressbar" aria-valuenow="70"
      aria-valuemin="0" aria-valuemax="100" style="width:75%">
        <!-- <span class="sr-only">70% Complete</span> -->
    </div>

  </div>

  <div class="row">
    <h3>Order No. 12345</h3>
  </div>

  <div class="inner-center">

    <div class="row">

      <div class="col-md-3">

        <p>Shipping Address:</p>
        <p>Juan Dela Cruz</p>
        <p>Metro Manila Philippines</p>
        <p>0912 345 6789</p>

      </div>

      <div class="col-md-3">

        <p>Shipping Method:</p>
        <p>Flat Rate: Fixed</p>

      </div>

      <div class="col-md-3">

        <p>Billing Address:</p>
        <p>Juan Dela Cruz</p>
        <p>Metro Manila Philippines</p>
        <p>0912 345 6789</p>

      </div>

      <div class="col-md-3">

        <p>Payment Method:</p>
        <p>Cash on Delivery</p>

      </div>

    </div>

    <div class="row text-center">

      <h4>Product Table</h4>

    </div>

    <div class="row">

      <div class="table-container">

        <table class="table">
          <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>

          <tr>
            <td></td>
            <td>MSI Z370 Godlike Gaming</td>
            <td>msi-mbo-123</td>
            <td><strong>Php 29,340</strong></td>
            <td>
              <p>Ordered: 1</p>
              <p>Shipped: 1</p>
            </td>
            <td><strong>Php 29,340</strong></td>
          </tr>

          <tr>
            <td></td>
            <td>MSI Z370 Godlike Gaming</td>
            <td>msi-mbo-123</td>
            <td><strong>Php 29,340</strong></td>
            <td>
              <p>Ordered: 1</p>
              <p>Shipped: 1</p>
            </td>
            <td><strong>Php 29,340</strong></td>
          </tr>
        </table>

      </div>

    </div>

  </div><br>

  <div class="row text-center">

    <h4>Total Payment</h4>

  </div>

  <div class="row">

    <div class="total-order text-center">

      <div class="row">
        <div class="col-md-6">
          <p>Subtotal:</p>
        </div>

        <div class="col-md-6">
          <p>Php 58,680</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p>Shipping Fee:</p>
        </div>

        <div class="col-md-6">
          <p>Php 200</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <strong>Total:</strong>
        </div>

        <div class="col-md-6">
          <strong>Php 58,880</strong>
        </div>
      </div>

      <!-- <p>Subtotal: Php 58,680</p>
      <p>Shipping Fee: Php 200</p>
      <strong>Total: Php 58,880</strong> -->

    </div>

  </div>

</div><br>


<div class="col-md-12 download-app-box text-center">

    <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD  NOW</a>

</div>

<div class="col-md-12 footer-box">


    <div class="row small-box ">
        <strong>Mobiles :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
        <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

    </div>
    <div class="row small-box ">
        <strong>Laptops :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Laptops</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony Laptops</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
        <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items
    </div>
    <div class="row small-box ">
        <strong>Tablets : </strong><a href="#">samsung</a> |  <a href="#">Sony Tablets</a> | <a href="#">Microx</a> |
        <a href="#">samsung </a>|  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> |
        <a href="#">Microx</a> |<a href="#">samsung Tablets</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx Tablets</a> | view all items

    </div>
    <div class="row small-box pad-botom ">
        <strong>Computers :</strong> <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |
          <a href="#">Sony</a> | <a href="#">Microx</a> |<a href="#">samsung</a> |  <a href="#">Sony</a> |
        <a href="#">Microx Computers</a> |<a href="#">samsung Computers</a> |  <a href="#">Sony</a> | <a href="#">Microx</a> |
        <a href="#">samsung</a> |  <a href="#">Sony</a> | <a href="#">Microx Computers</a> |<a href="#">samsung</a> |
        <a href="#">Sony</a> | <a href="#">Microx</a> | view all items

    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Send a Quick Query </strong>
            <hr>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Email address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <strong>Our Location</strong>
            <hr>
            <p>
                 234, New york Street,<br />
                                Just Location, USA<br />
                Call: +09-456-567-890<br>
                Email: info@yourdomain.com<br>
            </p>

            2014 www.yourdomain.com | All Right Reserved
        </div>
        <div class="col-md-4 social-box">
            <strong>We are Social </strong>
            <hr>
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
    <hr>
</div>
<!-- /.col -->
<div class="col-md-12 end-box ">
    &copy; 2018 | &nbsp; All Rights Reserved | &nbsp; www.pconlineshop.com | &nbsp; 24x7 support | &nbsp; Email us: pconlineshop.gmail.com
</div>

</body>
</html>
