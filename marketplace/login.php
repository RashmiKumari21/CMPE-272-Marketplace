<?php session_start();
include "phptodb.php";
$username = $_POST["username"];
$password = $_POST["password"];



$sql = "SELECT * FROM users where username = '$username' and password = '$password'";

if(mysqli_query($mysqli, $sql)){
  $result = mysqli_query($mysqli, $sql);

if($result->num_rows){
  echo "<script>document.cookie='username=$username'</script>";
  echo "<script>window.location.pathname = '/landingPage/index.php'</script>";
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
