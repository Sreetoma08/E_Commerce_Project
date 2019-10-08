   <?php
    function check_if_added_to_cart($item_id){
    $con= mysqli_connect("localhost", "root", "", "store_backup") or die(mysqli_error($con));
    $user_id=$_SESSION['user_id'];
    $cart_query="select* from users_items where item_id='$item_id' and user_id='$user_id' and status='Added to Cart'";
    $cart_query_result= mysqli_query($con, $cart_query)or die(mysqli_error($con));
    $total_rows= mysqli_num_rows($cart_query_result);
    if($total_rows>=1){
        return 1;
    }
    else {
        return 0;
        
    }
    
}
?>