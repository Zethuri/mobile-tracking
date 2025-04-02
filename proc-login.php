<?php
session_start();

error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page


include 'conn.php';


$email = $_POST['mt_email'];
$password = $_POST['mt_password'];

if(!$email || !$password)
{
    $error = "Both fields are required";
    include 'login.php';
    exit;
}

$query = "select * from login where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result); 

if($row)
{
    $_SESSION['valid_user'] = $email;
    $_SESSION['user_id'] = $row['id'];
    header("Location: dashboard.php");
    exit; 
}

else {
    $error = "Login Invalid";
    include 'login.php';
    exit;
}

?>