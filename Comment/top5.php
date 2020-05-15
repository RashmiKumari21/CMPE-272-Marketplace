<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php 
    $servername = "3.234.254.199";
      $username = "cmpe272";
      $password = "cmpe272";

      // Create connection
      $mysqli = new mysqli($servername, $username, $password, "cmpe272");

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }
	  // query for top 5 most visited
      $query="SELECT product_image_url,product_url,visited FROM products ORDER BY visited DESC LIMIT 5";
      $result = mysqli_query($mysqli, $query);
	  // query for top 5 rated
	  $query2="SELECT product_image_url,product_url,average FROM products ORDER BY average DESC LIMIT 5";
      $result2 = mysqli_query($mysqli, $query2);


     ?>
  </body>
</html>