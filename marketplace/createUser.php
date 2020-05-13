<?php
include "phptodb.php";
$uname = $_GET["uname"];
$password = $_GET["password"];
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];

$sql = "INSERT INTO users (username, password, firstname, lastname, emailid)
VALUES ('$uname','$password','$fname', '$lname', '$email')";

if ($mysqli->query($sql)) {
	header('location:index.php');

    echo "<html>
<head>
<br>
<h1>User Added</h1>
</head>
<body bgcolor='black' text='white'
	style='text-align: center; background-image: url(bg.jpg);>
	<div style='   
	'>
		New user has been added successfully <br>
        <br> <a href='login.php' style='color: white'>Click here</a> to go back to Login page

	</div>
</html>";
} else {
    echo "There was an error executing below query: ". "<br>"  . $sql . "<br>" . $mysqli->error;
}
?>