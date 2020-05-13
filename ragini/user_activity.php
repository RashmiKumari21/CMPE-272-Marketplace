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
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<style>

table {
font-family: "Lato","sans-serif";
}       /* added custom font-family  */
 
table.one {                                  
margin-bottom: 3em; 
}   
 
td {                            /* removed the border from the table data rows  */
text-align: left;     
width: 10em;                    
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
  <div style="overflow: auto;">
      <h2>User Activity</h2><br />
      <div id="tbluserActivity">

<?php

try {

$url = "http://app.ragini-dwivedi.com/cmpe272/db_useractivity.php";
$jsonArray = array();
$jsonArray = json_decode(get_web_page($url));
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

</body>
</html>
