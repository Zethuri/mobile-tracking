<?php
session_start();
include('conn.php');

error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page

$id = base64_decode($_GET['id']); 

$query = "delete from close_contact where id = '$id'";
$result = mysqli_query($conn, $query);

include 'close-contacts.php';
exit;

?>