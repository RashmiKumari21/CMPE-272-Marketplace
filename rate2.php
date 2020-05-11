// form for the rating and review as well as showing rating and review for the product page. 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search for User</title>
  </head>
  <body>



    <form action="rate.php" method="post">
    <p> Select Field to search
   <select name = "select">
      <option selected = "rating">*</option>
    <option>fivestar</option>
    <option>fourstar</option>
    <option>threestar</option>
    <option>twostar</option>
    <option>onestar</option>
  </select>    </p>
  Please Enter code <input type="text" name="input" />
  <input type="submit" name ="ENTER" value = "Enter" >
 <input type="hidden" name="pname" value="dp3">
 <?php
 DEFINE ('DB_USER', 'antdishi_antdish');
 DEFINE ('DB_PASSWORD', 'Rajududha1234!');

 DEFINE ('DB_HOST', 'localhost:3306');

 DEFINE ('DB_NAME', 'antdishi_userstorage');

 extract ($_POST );

 $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

 OR die('Could not connect to MySQL: ' .

 mysqli_connect_error());
 //udate the visitercount
 $query = "UPDATE review SET visit = visit + 1 WHERE pname = 'dp3'";
 $response = @mysqli_query($dbc, $query);
 //shopw the rating for the product
 $query2 = "SELECT * FROM USER WHERE pname = 'dp3'";
 $response2 = @mysqli_query($dbc, $query2);
 if($response2){
   echo'YELLO';

 echo '<table


 <tr><td><b>star</b></td>
 <td ><b>amount</b></td>';

 while($row = mysqli_fetch_array($response2)){


 echo '<tr><td >one star</td><td>' .

 $row['onestar'] . '</td><td >one star</td><td>' .

 $row['twostar'] . '</td><td >one star</td><td>' .
 $row['threestar'] . '</td><td >one star</td><td>' .

 $row['fourstar'] . '</td><td >one star</td><td>' .

 $row['fivestar'] . '</td>';
$visits=$row['visit'];


 echo '</tr>';

 }}
echo '</table>';
echo 'this page has been visited'.$visits.' times';






  ?>

  </body>
</html>
