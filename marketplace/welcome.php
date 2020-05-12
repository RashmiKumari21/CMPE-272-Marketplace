<?php session_start();

 require_once ("google.php");
$authUrl = $g_client->createAuthUrl();


//echo $pay_load["email"];
// $token = $g_client->fetchAccessTokenWithAuthCode($code);
// $g_client->setAccessToken($token);
if (!isset($_SESSION['email'])){
	header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
}
else if (isset($_SESSION['token'])){
            //$g_client->setAccessToken($_SESSION['token']);
						echo "<a href='logout.php'><span>Logout</span> </a>";
							
}

// echo "Arpit access token".$g_client->fetchAccessTokenWithAuthCode($_GET['code']);

// print_r($_SESSION['token']);
// if(isset($_GET['code'])){
// 	$g_client->authenticate($_GET['code']);
//   $_SESSION['token'] = $g_client->fetchAccessTokenWithAuthCode($_GET['code']);
//   echo 'arpit cufrnbiutrbntiubnirt'.$_SESSION['token'];
// 	header('Location: ' . filter_var($g_client->getRedirectUri(), FILTER_SANITIZE_URL));
// }
// if (isset($_SESSION['token'])) {
//   $_SESSION["allowed"]=true;
//   echo "Ho";
// 	$gpUserProfile = $google_oauthV2->userinfo->get();
// 	$email=$gpUserProfile['email'];
// 	setcookie("email",$email);
// 	setcookie("allowed",True);
//    // $_COOKIE["email_id"]=$gpUserProfile['gender'];
// }

    echo "<!doctype html>
    <html lang='en'>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='description' content=''>
        <meta name='author' content=''>
        <link rel='icon' href='/docs/4.0/assets/img/favicons/favicon.ico'>
    
        <title>Cover Template for Bootstrap</title>
    
        <link rel='canonical' href='https://getbootstrap.com/docs/4.0/examples/cover/'>
        <link href='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>
        <script src='//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <!-- Bootstrap core CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    
        <!-- Custom styles for this template -->
        <link href='cover.css' rel='stylesheet'>
      </head>
    
      <body class='text-center'>
        <div class='cover-container d-flex h-100 p-3 mx-auto flex-column'>
          <header class='masthead mb-auto'>
            <div class='inner'>
              <h3 class='masthead-brand'>Cover</h3>
              <nav class='nav nav-masthead justify-content-center'>
                <a class='nav-link active' href='#'>Home</a>
                <a class='nav-link' href='#'>Features</a>
                <a class='nav-link' href='#'>Contact</a>
              </nav>
            </div>
          </header>
    
          <main role='main' class='inner cover'>
            <h1 class='cover-heading'>Cover your page.</h1>
            <p class='lead'>Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class='lead'>
              <a href='#' class='btn btn-lg btn-secondary'>Learn more</a>
            </p>
          </main>
    
          <footer class='mastfoot mt-auto'>
            <div class='inner'>
              <p>Cover template for <a href='https://getbootstrap.com/'>Bootstrap</a>, by <a href='https://twitter.com/mdo'>@mdo</a>.</p>
            </div>
          </footer>
        </div>
    
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
        <script>window.jQuery || document.write('<script src='../../assets/js/vendor/jquery-slim.min.js'><\/script>')</script>
        <script src='../../assets/js/vendor/popper.min.js'></script>
        <script src='../../dist/js/bootstrap.min.js'></script>
      </body>
    </html>";
?>
