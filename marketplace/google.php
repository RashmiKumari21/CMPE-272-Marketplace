<?php 
require ("vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("762904444053-oljf480u0pbm7pg4iv0acmvtqq7cug5l.apps.googleusercontent.com");
$g_client->setClientSecret("UQH510HYSr84wIv3t94YgRad");
$g_client->setRedirectUri("http://localhost/272_Marketplace/CMPE-272--Marketplace/marketplace/welcome.php");
$g_client->setScopes("email");

//Step 2 : Create the url
// $auth_url = $g_client->createAuthUrl();
// echo "<a href='$auth_url'>Login Through Google </a>";

//Step 3 : Get the authorization  code



$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if(isset($code)) {

    try {
        $g_client->addScope("email");
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
        $_SESSION['token'] = $token;
    }catch (Exception $e){
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();
        
    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){
    //print_r($pay_load);
     //print_r($_SESSION['token']);
    $_SESSION['email'] = $pay_load["email"];
    $g_client->setAccessToken($_SESSION['token']["id_token"]);
    //$_SESSION(['token']);
  
}