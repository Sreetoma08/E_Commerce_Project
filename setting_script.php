<?php
include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
$new_pass= mysqli_real_escape_string($con,$_POST['new_password']);
$retype_new_pass= mysqli_real_escape_string($con,$_POST['retype_new_password']);
$pass= md5($new_pass);
if(!(strcmp($new_pass, $retype_new_pass))){
   $update_query="update users set password='$pass' where email_id='$_SESSION[email_id]'"; 
   $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
   header("location:index.php");
   echo 'Password updated';
}
 else {
    echo 'Passwords dont match!';
    header("location:setting.php");    
}
?>