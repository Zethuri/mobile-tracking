<?php
session_start();
include 'conn.php';

error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page

$id = $_SESSION['user_id']; 
$email = $_POST['user_email'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

if (!$fullname || !$phone) {
    $error = "Both fields are required";
    include 'close-contacts.php';
    exit;
}

$query_chk = "select * from close_contact where contact_name='$fullname'";
$result_chk = mysqli_query($conn, $query_chk);
$num = mysqli_num_rows($result_chk);
if($num)
{
    $error = "Contact already added";
    include "close-contacts.php";
    exit;
}
 
$query = "insert into close_contact set user_id ='$id', user_email='$email', contact_name ='$fullname', contact_phone ='$phone'";
$result = mysqli_query($conn, $query);

if($result)
{
    $success = "Contact added successfully";
    include 'close-contacts.php';
    exit;
}

?>