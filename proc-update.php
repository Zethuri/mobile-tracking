<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

include 'conn.php';

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$address = $_POST['address'];

$email = $_POST['user_email'];

if (!$fullname || !$phone || !$state || !$address) {
    $error = 'Fill in the fields correctly';
    include 'update-profile.php';
    exit;
}

$query = "update users set fullname ='$fullname', phone ='$phone', state ='$state', address='$address' where email='$email'"; 
$result = mysqli_query($conn,$query);

if($result)
{
    $success = "Profile updated successfully";
    include 'update-profile.php';
    exit;
}


?>