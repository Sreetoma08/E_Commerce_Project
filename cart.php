<!DOCTYPE html>

<html>
    <head>
        <title>My Cart</title>
        <link rel="stylesheet" href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
        include 'C:\wamp64\www\E_Commerce_Project\includes\common.php';
        include 'C:\wamp64\www\E_Commerce_Project\includes\header.php';
        $user_id=$_SESSION['user_id'];
        echo $user_id;
        $cart_query="select items.id,items.name,items.price from users_items inner join items on users_items.item_id=items.id where users_items.user_id='$user_id' and users_items.status='Added to Cart'";
        $cart_query_result= mysqli_query($con, $cart_query) or die(mysqli_error($con));
        $total_cart_rows= mysqli_num_rows($cart_query_result);
        
        if($total_cart_rows==0){
        echo 'Add items to the cart first!';
        }
        else {
        ?>
  
        
        <div class="container con-style-1">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <td></td>
                    </tr>
                     <?php
                        $sum=0;
                        while ($row= mysqli_fetch_array($cart_query_result)){
                        $sum=$sum+$row['price'];
                        ?>    
                        <tr>
                            <td>
                            <?php
                            echo $row['id'];
                            ?>
                            </td>
                            
                            <td>
                            <a href="cart_remove.php?id=<?php echo $row['id']?>" class='remove_item_link'>Remove </a>
                            <?php
                            echo $row['name'];
                            ?>
                            </td>
                            
                            <td>
                            <?php
                            echo $row['price'];
                            ?>
                            </td>
                        
                            <td></td>
                    </tr>
                    <?php
                    }
                    ?>
                        <tr>
                        <td></td>
                        <td>Total</td>
                        <td>
                            <?php
                            echo $sum;
                            ?>
                        </td>
                        <td><a href="success.php"><button class="btn btn-primary btn-block">Confirm Order</button></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
      
    </body>
</html>
