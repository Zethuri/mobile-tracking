<?php
error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page

include 'conn.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if (!$fullname || !$email || !$password || !$confirm_password)
{
    $error = 'You are required to fill all the fields';
    include 'register.php';
    exit;
}

if ($password !== $confirm_password) {
     $error = "Password doesn't match";
     include 'register.php';
     exit;
}

$query = "insert into register set fullname = '$fullname', email = '$email', password = '$password'";
$result = mysqli_query($conn, $query);

if($result)
{
    $query_chk = "insert into login set email = '$email', password = '$password'";
    $result_ckk = mysqli_query($conn, $query_chk);

    header("Location: success.php");
    exit;
}
?>