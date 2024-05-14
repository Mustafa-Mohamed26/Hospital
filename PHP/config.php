<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "hospital";
    $con = "";

    $con = mysqli_connect($db_server, $db_user, $db_pass, $db_name) or die("Couldn't connect");
?>