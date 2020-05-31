<?php
require '../includes/common.php';
$pass=$_POST['old_pass'];
$pass= mysqli_real_escape_string($con, $pass);
$pass= md5($pass);

$new_pass=$_POST['new_pass'];
$new_pass= mysqli_real_escape_string($con, $new_pass);
$new_pass= md5($new_pass);

$check_pass=$_POST['check_pass'];
$check_pass= mysqli_real_escape_string($con, $check_pass);
$check_pass= md5($check_pass);

$email=$_SESSION['email'];

$query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
$result_query= mysqli_query($con, $query) or die(mysqli_error($con));
$row=mysqli_num_rows($result_query);
if($row==0){
    $msg="<span class='red'>Enter correct Old password</span>";
    header('location:settings.php?m1='.$msg);

}
 else if($row>0 && $new_pass==$check_pass){
    $update_query="UPDATE users SET password='$new_pass' WHERE email='$email'";
    $result_update= mysqli_query($con, $update_query) or die(mysqli_error($con));
    $msg="<span class='green'>Password Updated</span>";
    header('location:settings.php?m1='.$msg);
            
}   
else{
    $error="<span class='red'>Invalid Credentials</span>";
     header('location:settings.php?m1='.$error);
}