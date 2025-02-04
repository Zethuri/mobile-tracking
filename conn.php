<?php

$username = "mobile_tracker";
$password = "Administrator123";
$localhost = "localhost";
$database = "mobile_tracker";

$conn = mysqli_connect("localhost", "mobile_tracker", "Administrator123", "mobile_tracker");

if(!$conn){
    echo "Couldn't connect to the database";
    exit;
    
}


?>