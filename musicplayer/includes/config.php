<?php
    ob_start();
    session_start();
    
    $timezone = date_default_timezone_set("Europe/London");
    
    $con = mysqli_connect("localhost", "root", "", "musicplayer");

    if(mysqli_connect_errno()) {
        echo "failed to connect: " . mysqli_connect_errno();
    }
?>