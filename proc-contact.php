<?php
include 'conn.php';

error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];

if (!$fullname || !$phone) {
    $error = "Both fields are required";
    include 'close-contacts.php';
    exit;
}

echo $query = "insert into close_contacts set contact_name ='$fullname', contact_phone ='$phone'";exit;
$result = mysqli_query($conn, $query);

if($result)
{
    $success = "Contact added successfully";
    include 'close-contacts.php';
    exit;
}

?>