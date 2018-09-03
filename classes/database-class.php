<?php


  class Database{

    private $server;
    private $user;
    private $password;
    private $database;

    protected function connect(){

      $this->server = "localhost";
      $this->user = "root";
      $this->password = "";
      $this->database = "online-shop";

      $connect = new mysqli($this->server, $this->user, $this->password, $this->database);

      return $connect;

    }

    protected function retrieveGroup(){

      $selectGroup = "SELECT * FROM product_group_table";
      $queryResult = $this->connect()->query($selectGroup);
      // $numRows = $queryResult->num_rows;

      // if ($numRows > 0) {
        while ($row = $queryResult->fetch_array()) {
          $id = $row['product_group_id'];
          $data[] = $row;

          $selectCategory = "SELECT * FROM product_category_table WHERE product_group_id = '$id'";
          $queryResult2 = $this->connect()->query($selectCategory);
          // $numRows2 = $queryResult2->num_rows;

          // if ($numRows2 > 0) {
            while ($row2 = $queryResult2->fetch_array()) {
              $data2[] = $row2;
            }
            // return $data;
          // }

        }
        return array($data, $data2);
      // }

    }

    // protected function retrieveCategory(){
    //   $groupID = $this->retrieveGroup();
    //   foreach ($groupID as $id) {
    //
    //     $ids = $id['product_group_id'];
    //
    //     $selectCategory = "SELECT * FROM product_category_table WHERE product_group_id = '$ids'";
    //     $queryResult = $this->connect()->query($selectCategory);
    //     $numRows = $queryResult->num_rows;
    //
    //     if ($numRows > 0) {
    //       while ($row = $queryResult->fetch_assoc()) {
    //         $data[] = $row;
    //       }
    //       return $data;
    //     }
    //   }
    // }





  }

 ?>
