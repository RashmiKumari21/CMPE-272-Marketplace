<?php
	  function ratingupdate($product_id,$rating) {

      $servername = "3.234.254.199";
      $username = "cmpe272";
      $password = "cmpe272";

      // Create connection
      $mysqli = new mysqli($servername, $username, $password, "cmpe272");

      // Check connection
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }

      $query="UPDATE products SET $rating = $rating + 1 WHERE id ='$product_id'";
      $result = mysqli_query($mysqli, $query);
    }
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
      $query = "INSERT INTO reviews VALUES ('$review',$product_id,'$username');";
      $result = mysqli_query($mysqli, $query);
    }
	if(isset($_POST['rating'])){
		ratingupdate($_POST['product_id'],$_POST['rating']);
		reviewupdate($_POST['product_id'],$_POST['review'],$_POST['username']);
		
		
		
	}
	
	echo 'Helloword';
	



?>