$params=array('username'=>"Ragini",'companyname'=>"Minfri",'pagename'=>"Wrike",'pagelink'=>"http://app.ragini-dwivedi.com/services/wrike.php");
$url = "http://app.ragini-dwivedi.com/cmpe272/db_adduseractivity.php";
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER         => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_ENCODING       => "",
    CURLOPT_USERAGENT      => "chrome",
    CURLOPT_AUTOREFERER    => true,
    CURLOPT_CONNECTTIMEOUT => 120,
    CURLOPT_TIMEOUT        => 120,
    CURLOPT_POSTFIELDS     => $params,
    CURLOPT_RETURNTRANSFER => false
);

$ch = curl_init($url);
curl_setopt_array($ch, $options);

curl_exec($ch);

curl_close($ch);
