<?php
include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$pass= md5($password);
$login_query="select id,name,email_id from users where email_id='$email' and password='$pass'";
$login_query_result=mysqli_query($con,$login_query)or die(mysqli_error($con));
$total_rows= mysqli_num_rows($login_query_result);
    if($total_rows==0){
        header("location:index.php?email_error=enter correct email and password");
        }
    else{
        $row= mysqli_fetch_array($login_query_result);
        $_SESSION['email_id']=$email;
        $_SESSION['user_id']=$row['id'];
        header("location:post_login_products.php");
        }
  ?>      
    
        
            
    
    

