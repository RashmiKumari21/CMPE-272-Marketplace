<?php session_start();
include "phptodb.php";
$username = $_GET["username"];
$password = $_GET["password"];



$sql = "SELECT * FROM users where username = '$username' and password = '$password'";

if(mysqli_query($mysqli, $sql)){
  $result = mysqli_query($mysqli, $sql);

if($result->num_rows){
  $_SESSION['email'] = $username;
  $_SESSION['token'] = $username;
  echo "<h1>Login Successful</h1>";
  $_SESSION["allowed"]=true;
  header('location:welcome.php');
 }
 else{
   echo "invalid creds";
 }
}
else{
  echo "There was an error executing below query: ". "<br>"  . $sql . "<br>" . $mysqli->error;
}


?>