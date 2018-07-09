<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" enctype="multipart/form-data">

      <input type="text" name="name" placeholder="Product Name">
      <select class="dropdown" name="type">
        <option value="gpu">GPU</option>
        <option value="cpu">CPU</option>
        <option value="mobo">Mobo</option>
      </select>
      <input type="text" name="price" placeholder="Product Price">
      <input type="file" name="fileToUpload">
      <input type="submit" name="btn-submit" value="Save">

    </form>



  </body>
</html>

<?php

$conn = new mysqli("localhost", "root", "", "online-shop");

// $target_dir = "uploads/products".basename($_FILES["fileToUpload"]["name"]);;
// $upload_dir = ini_get('upload_tmp_dir');
// $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
// $fullpath = fopen($_FILES["fileToUpload"]["tmp_name"], 'r');
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["btn-submit"])) {

  $product_type = $_POST['type'];

  if ($product_type == "gpu") {
    $target_dir = "uploads/products/gpu/".basename($_FILES["fileToUpload"]["name"]);;
  }
  elseif ($product_type == "cpu") {
    $target_dir = "uploads/products/cpu/".basename($_FILES["fileToUpload"]["name"]);;
  }
  else {
    $target_dir = "uploads/products/mobo/".basename($_FILES["fileToUpload"]["name"]);;
  }

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

      if (file_exists($target_dir)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      else {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;

        $product_name = $_POST["name"];
        $product_price = $_POST["price"];

        mysqli_query($conn, "INSERT INTO product_table VALUES ('','$product_name', '$product_price', '$target_dir')");
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_dir);
      }


    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


}

?>
