<nav class="navbar navbar-expand-lg navbar-light bg-dark my-0 py-0 rounded-bottom">
  <!-- BRAND AND COLLAPSE BUTTON -->
  <a href="index.php " class="navbar-brand text-light">Online Shop</a>
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
        <a href="order-tracking.php" class="nav-link text-light">Track Order</a>
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
            <a href="session-destroyer.php" class="dropdown-item">Logout</a>
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
            <a class="dropdown-item" href="#">0912 345 6789</a>
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
</nav><br>
