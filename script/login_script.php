<?php
require '../includes/common.php';
$email=$_POST['email'];
$email= mysqli_real_escape_string($con, $email);

$pass=$_POST['pass'];
$pass=mysqli_real_escape_string($con, $pass);
$pass= md5($pass);

$query="SELECT password,id FROM users WHERE email='$email'";
$query_submit= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($query_submit)==0){
    $msg="<span class='red'>Email doesn't exists,please signup</span>";
    header('location:login.php?m1='.$msg);
}
else{
    $sql_pass= mysqli_fetch_array($query_submit);
    if($pass==$sql_pass['password']){
        $_SESSION['email']=$email;
        $_SESSION['user_id']=$sql_pass['id'];
        header('location:home.php');
    }
 else {
     $msg="<span class='red'>Invalid credentials</span>";
     header('location:login.php?m2='.$msg);
    }
}
?>

