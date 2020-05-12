<?php session_start();

require ("google.php");
// $g_client->setAccessToken($_SESSION['token']);
//echo $pay_load["email"];




unset($_SESSION['token']);
unset($_SESSION['email']);

//Reset OAuth access token
$g_client->revokeToken();

//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location:index.php");


?>