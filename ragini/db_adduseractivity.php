<?php

$mysql_user = "cmpe272";
$mysql_password = "cmpe272";


try {
    $conn = mysqli_connect("127.0.0.1", $mysql_user, $mysql_password);
    if (!$conn) {
        echo mysqli_connect_error();
        die("Connection failed: " . mysqli_connect_error());
    }   

    $query = "INSERT INTO cmpe272.user_activity(username, companyname, pagename, pagelink)";

    $username = trim($_REQUEST["username"]);
    $companyname = trim($_REQUEST["companyname"]);
    $pagename = trim($_REQUEST["pagename"]);
    $pagelink = trim($_REQUEST["pagelink"]);

    $query .= " VALUES('". $username ."', '" . $companyname . "', '" . $pagename . "', '" . $pagelink . "');";

    $retval = mysqli_query( $conn, $query );
    if(! $retval ) { 
        echo mysqli_error($conn);
        die('Could not get data: ' . mysqli_error($conn));
    }   

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    
}catch(Exception $e) {
    echo $e->getMessage();
    die("Connection failed: " . $e->getMessage());
}

?>
