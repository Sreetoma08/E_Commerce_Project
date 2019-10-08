<?php
include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$pass= md5($password);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$signup_query="select id,email_id from users where email_id='$email'";
$signup_query_result= mysqli_query($con, $signup_query);
$total_rows= mysqli_num_rows($signup_query_result);
if($total_rows>0)
    {
    echo "Email-id already exists";
    exit();
}
else {
    $user_registration_query="insert into users(name,email_id,password,contact,city,address) values('$name', '$email', '$pass', '$contact', '$city', '$address')";
    $user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    echo "User successfully inserted!";
    $signup_query="select id,email_id from users where email_id='$email'";
    $signup_query_result= mysqli_query($con, $signup_query);
    $row= mysqli_fetch_array($signup_query_result);
    $_SESSION['email_id']=$email;
    $_SESSION['user_id']=$row['id'];
    echo $_SESSION['user_id'];   
    header("location:post_login_products.php");
    
}
?>

