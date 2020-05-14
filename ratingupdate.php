<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    // function for rating update;
    <?php
    function ratingupdate($product_name,$rating) {

      $servername = "3.234.254.199";
      $username = "cmpe272";
      $password = "cmpe272";

      // Create connection
      $mysqli = new mysqli($servername, $username, $password, "cmpe272");

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }

      $query="UPDATE products SET $rating = $rating + 1 WHERE product_name ='$product_name'";
      $result = mysqli_query($mysqli, $query);
    }

     ?>

  </body>
</html>
