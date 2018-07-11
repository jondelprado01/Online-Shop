<?php

  // require '../connection.php';

  $conn = new mysqli("localhost", "root", "", "online-shop");

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $middlename = $_POST['middlename'];
  $bday = $_POST['bday'];
  $gender = $_POST['gender'];
  $lot = $_POST['lot'];
  $street = $_POST['street'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];
  $zipcode = $_POST['zipcode'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $mobile = $_POST['mobile'];
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $status = "Active";


  $checkDuplicate = mysqli_query($conn, "SELECT COUNT(*) FROM customer_table
                    WHERE customer_firstname = '$firstname' AND customer_lastname = '$lastname'
                    AND customer_birthday = '$bday' AND customer_status = 'Active'");


  $row = mysqli_fetch_row($checkDuplicate);

  if ($row[0] == 0) {

    mysqli_query($conn, "INSERT INTO customer_address_table VALUES('', '$lot', '$street', '$barangay',
                        '$city', '$zipcode', '$country', '$status')");

    $retrieveID = mysqli_query($conn, "SELECT customer_address_id FROM customer_address_table ORDER BY customer_address_id DESC LIMIT 1");

    while ($row = mysqli_fetch_array($retrieveID)) {
      $addressID = $row['customer_address_id'];
    }

    mysqli_query($conn, "INSERT INTO customer_table VALUES('', '$firstname', '$middlename', '$lastname',
                        '$bday', '$email', '$user', '$pass', '$telephone', '$mobile', '$addressID', '$status')");

?>
  <script>
  alertify.alert()
    .setting({
      'title':'Customer Record',
      'label':'Agree',
      'message': 'Customer Record Successfully Saved!' ,
      'onok': function(){ alertify.success('Successful');}
    }).show();
  </script>
<?php

  }

  else {
    ?>

    <script>
      alertify.alert()
        .setting({
          'title':'Customer Record',
          'label':'Exit',
          'message': 'Sorry, Record is already Existing!' ,
          'onok': function(){ alertify.error('Failed');}
      }).show();
    </script>

    <?php
  }


?>
