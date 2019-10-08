<?php
include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
$item_id=mysqli_real_escape_string($con,$_GET['id']);
$user_id=$_SESSION['user_id'];
echo $user_id ;
$insert_product_query="insert into users_items(user_id,item_id,status) values('$user_id','$item_id','Added to Cart')";
$insert_product_result= mysqli_query($con, $insert_product_query) or die(mysqli_error($con));
header("location:post_login_products.php");
?>


