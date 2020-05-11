<?php

$mysql_user = "cmpe272";
$mysql_password = "cmpe272";

try {

    $conn = mysqli_connect("127.0.0.1", $mysql_user, $mysql_password);
    if (!$conn) {
        echo mysqli_connect_error();
        die("Connection failed: " . mysqli_connect_error());
    }   

    $query = "select * from cmpe272.user_activity;";

    $retval = mysqli_query( $conn, $query );
    if(! $retval ) { 
        echo mysqli_error($conn);
        die('Could not get data: ' . mysqli_error($conn));
    }

    $output = '[]';
    $output = json_decode($output, TRUE);
    while($row = mysqli_fetch_array($retval)) {
        $output[] = ['Id' => $row['id'], 'username' => $row['username'], 'companyname' => $row['companyname'], 'pagename' => $row['pagename'], 'pagelink' => $row['pagelink']];
    }

    mysqli_close($conn);
    echo json_encode($output);

}catch(Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
