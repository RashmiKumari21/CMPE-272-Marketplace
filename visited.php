<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function visited($product_name) {
      
      $servername = "3.234.254.199";
      $username = "cmpe272";
      $password = "cmpe272";

      // Create connection
      $mysqli = new mysqli($servername, $username, $password, "cmpe272");

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }
      $query = "UPDATE products SET visited = visited + 1 WHERE product_name ='$product_name'";
      $result = mysqli_query($mysqli, $query);
    }
     ?>
  </body>
</html>

<!-- paste this file in your same location as your product file is -->
<!-- Cut the below line and paste it on you website's product pages  -->
<?php include './visited.php';?>
<?php visited('< replace this with name of the product in the products table >') ?>
