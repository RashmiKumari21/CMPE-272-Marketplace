// Code for the background of the form for rating and review
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    DEFINE ('DB_USER', 'antdishi_antdish');
    DEFINE ('DB_PASSWORD', 'Rajududha1234!');

    DEFINE ('DB_HOST', 'localhost:3306');

    DEFINE ('DB_NAME', 'antdishi_userstorage');

    extract ($_POST );

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

    OR die('Could not connect to MySQL: ' .

    mysqli_connect_error());
    // query for the update the star rating.
    $query = "UPDATE review SET".$select." = ".$select." + 1 WHERE pname  ='".$pname."'";

    $response = @mysqli_query($dbc, $query);
    //query for adding review tab
    $query2 = "insert into'.$pname.' values ('.$input.',''.$rating.');
    $response2 = @mysqli_query($dbc, $query2);


     ?>

  </body>
</html>
