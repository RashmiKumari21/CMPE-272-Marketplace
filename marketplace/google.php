<?php 
require ("vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();


$g_client->setClientId("");
$g_client->setClientSecret("");
$g_client->setRedirectUri("");
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
