<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    // function for rating update;
    <?php
    function reviewupdate($product_id,$review,$username) {

      $servername = "3.234.254.199";
      $username = "cmpe272";
      $password = "cmpe272";

      // Create connection
      $mysqli = new mysqli($servername, $username, $password, "cmpe272");

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }
      $query1 = "INSERT INTO reviews VALUES ('$review','$product_id','$username');";
      $result = mysqli_query($mysqli, $query);
    }

     ?>

  </body>
</html>
