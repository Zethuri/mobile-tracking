<?php 
include 'conn.php';


$id = $_POST['id'];
$password = $_POST['password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

if ($new_password !== $confirm_password) {
    $error = "Password doesn't match";
    include 'setting.php';
    exit;
}

$query_chk = "select * from login where password = '$password'";
$result_chk = mysqli_query($conn, $query_chk);
$num_chk = mysqli_num_rows($result_ckk);

if($password == $num_chk){
    $query = "update login set password = $new_password where id ='$id'";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        $success = 'Password changed successfully';
        include 'setting.php';
        exit;
    }
}



?>