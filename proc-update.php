<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conn.php';

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$address = $_POST['address'];

if (!$fullname || !$phone || !$state || !$address) {
    $error = 'Fill in the fields correctly';
    include 'update-profile.php';
    exit;
}

echo $query = "update users set fullname ='$fullname', phone ='$phone', state ='$state', address='$address'"; exit;
$result = mysqli_query($conn,$query);

if($result)
{
    $success = "Profile updated successfully";
    include 'update-profile.php';
    exit;
}


?>