<?php
require '../includes/common.php';
$name=$_POST['name'];
$name= mysqli_real_escape_string($con, $name);

$email=$_POST['email'];
$email= mysqli_real_escape_string($con, $email);

$pass=$_POST['pass'];
$pass= mysqli_real_escape_string($con, $pass);
$pass= md5($pass);

$contact=$_POST['contact'];
$contact= mysqli_real_escape_string($con, $contact);

$city=$_POST['city'];
$city= mysqli_real_escape_string($con, $city);

$address=$_POST['address'];
$address= mysqli_real_escape_string($con, $address);
$email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$contact_regex = "/^[789][0-9]{9}$/";

$query="SELECT * FROM users WHERE email='$email'";
$result_query= mysqli_query($con, $query) or die(mysqli_error($con));
$total_row= mysqli_num_rows($result_query);
if($total_row){
    $error="<span class='red'>Email already exists</span>";
    header('location:signup.php?m1='.$error);
}
else if(!preg_match($email_regex, $email)){
    $error="<span class='red'>Incorrct Email id</span>";
     header('location:signup.php?m1='.$error);
}
else if(!preg_match($contact_regex, $contact)){
    $error="<span class='red'>Incorrct contact</span>";
    header('location:signup.php?m2='.$error);
}
    else{
        $insert_query = "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$pass','$contact','$city','$address')";
        $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:home.php');
    }

        
?>

