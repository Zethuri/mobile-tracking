<?php 


session_start();

error_reporting(1); // Disable all error reporting
ini_set('display_errors', 1); // Prevent errors from being shown on the page


include 'conn.php';


$id = $_SESSION['user_id']; 

$password = $_POST['password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if(!$password || !$new_password || !$confirm_password)
{
    $error = 'Please fill in the details';
    include 'setting.php';
    exit;
}

if ($new_password !== $confirm_password) {
    $error = "Password doesn't match";
    include 'setting.php';
    exit;
}

$query_chk = "select * from login where password = '$password'"; 
$result_chk = mysqli_query($conn,  $query_chk);
$num_chk = mysqli_num_rows($result_chk);
$row = mysqli_fetch_array($result_chk);

$hashed_password = $row['password']; 

if($password == $hashed_password){
    $query = "update login set password = '$new_password' where id = '$id' "; 
    $result = mysqli_query($conn,$query);
    if($result)
    {
        $success = 'Password changed successfully';
        include 'setting.php';
        exit;
    }
}
else{
    $error = "Password Incorrect";
    include 'setting.php';
    exit;
}


?>