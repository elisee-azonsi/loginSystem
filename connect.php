<?php

$serverName = "localhost";
$username = "root";
$password= "";
$dbname = "login";


// create connection

$conn = new mysqli($serverName, $username, $password, $dbname);

if($conn->connect_error){
    echo "Connection Failed";
}



?>