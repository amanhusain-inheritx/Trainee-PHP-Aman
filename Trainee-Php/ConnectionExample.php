<?php
    $servername="localhost";
    $username="username";
    $password= "password";


    $dbname= "employee";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
    else{
        echo "Connection Successfully";
    }
?>
