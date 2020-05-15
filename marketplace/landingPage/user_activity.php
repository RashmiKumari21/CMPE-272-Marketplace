<?php

function get_web_page($url, $username) {
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_ENCODING       => "",
        CURLOPT_USERAGENT      => "chrome",
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_CONNECTTIMEOUT => 120,
        CURLOPT_TIMEOUT        => 120
    );

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    curl_setopt($ch, CURLOPT_USERPWD, "$username");

    $content  = curl_exec($ch);

    curl_close($ch);

    return $content;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MarketPlace - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <style>

table {
font-family: "Open Sans", sans-serif;
border: 1px solid #ccc;
}       /* added custom font-family  */
 
table.one {                                  
margin-bottom: 3em; 
}   
 
td {                            /* removed the border from the table data rows  */
text-align: left;     
width: 10em;
border: 1px solid #ccc;
padding-left: 2em!important;                   
padding: 0.5em;       }       
 
th {                              /* removed the border from the table heading row  */
text-align: center;                 
padding: 1em;
background-color: #2B547E;       /* added a red background color to the heading cells  */
color: white;       }                 /* added a white font color to the heading text */
 
tr {    
height: 1em;    }
 
table tr:nth-child(even) {            /* added all even rows a #eee color  */
    background-color: #eee;     }
 
table tr:nth-child(odd) {            /* added all odd rows a #fff color  */
background-color:#fff;      }

  </style>

</head>
<body>

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background: rgba(23, 26, 29, 0.8);">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.html">Marketplace</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#services">Partner Sites</a></li>
              <li><a href="#portfolio">Top Products</a></li>
              <li><a href="#team">Team</a></li>
              <li class="active"><a href="/user_activity.php">User Activity</a></li>
              <li><a href="/statistics.php">Statistics</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->



  <div style="overflow: auto; margin: 3%; margin-top: 8.5%!important;">
      <h2>User Activity</h2><br />
      <div id="tbluserActivity">

<?php

try {

$url = "http://app.ragini-dwivedi.com/cmpe272/db_useractivity.php";
$jsonArray = array();
$jsonArray = json_decode(get_web_page($url, 'Ragini'));
echo '<table class="users" id="users" style="width: 100%; color: #000; font-size: 12pt;"><thead><tr><th>Id</th><th>User Name</th><th>Company Name</th><th>Page Name</th></tr></thead>';

echo "<tbody>";

foreach($jsonArray as $item){
    echo '<tr>';
    echo '<td>'.$item->Id .'</td>';
    echo '<td>'.$item->username .'</td>';
    echo '<td>'.$item->companyname .'</td>';
    echo '<td><a href="'.$item->pagelink .'">'.$item->pagename .'</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table><br /><br />';

}catch(Exception $e){
    echo $e->getMessage();
    die("Connection failed: " . $e->getMessage());
}


?>

      </div>
      <br />
  </div>
</div>

<div id="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: #001D38; color: #fff !important; text-align: center; ">
    <div class="container">
                <div class="row">
                    <div class="col-xl-12" style="text-align: center">
                        <p class="copy_right text-center" style="color: #fff !important; font-size: 13px;">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
                        </p>
                    </div>
                </div>
    </div>
</div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
