<?php

  require 'connection.php';

  $user = $_POST['username'];
  $pass = $_POST['password'];

  $retrieveUser = mysqli_query($conn, "SELECT *, CONCAT(customer_firstname,' ',customer_lastname)
                  AS fullname FROM customer_table WHERE customer_status = 'Active'");

  while ($row = mysqli_fetch_array($retrieveUser)) {

    $usernameExtracted = $row['customer_username'];
    $passwordExtracted = $row['customer_password'];
    $firstname = $row['customer_firstname'];
    $fullname = $row['fullname'];
    $mobile = $row['customer_mobile'];

    if ($user == $usernameExtracted && $pass == $passwordExtracted) {

      $_SESSION['name'] = $firstname;
      $_SESSION['fullname'] = $fullname;
      $_SESSION['mobile'] = $mobile;

      ?>

      <script>

        window.location.href = "index.php";

      </script>

      <?php
    }

    else {

      ?>

      <script>
        alertify.alert()
          .setting({
            'title':'Login Failed',
            'label':'Exit',
            'message': 'Sorry, Account Does Not Exist!' ,
            'onok': function(){ alertify.error('Failed');}
        }).show();
      </script>

      <?php

    }

  }

?>
