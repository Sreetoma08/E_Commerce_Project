<?php
include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
$delete_item=$_GET['id'];
$user=$_SESSION['user_id'];
$remove_query="delete from users_items where user_id='$user' and item_id='$delete_item'";
$remove_query_result= mysqli_query($con, $remove_query) or die(mysqli_error($con));
header("location:cart.php");
?>


