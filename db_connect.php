<?php
    $hostname = "localhost";
    $username = "admin_inventory";
    $password = "123";
    $db_name  = "db_inventory";

    $myConn = new mysqli($hostname, $username, $password, $db_name);
    if($myConn->connect_errno){
        echo "Failed connect to database";
        echo "<br />";
        die("STOP");
    }

?>