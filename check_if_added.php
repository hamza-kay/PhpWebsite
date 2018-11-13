<?php

    function check_if_added_to_cart($item_id){
        //session_start();
        require 'connection.php';
        $users_id=$_SESSION['id'];
        $item_check_query="select * from users_items where item_id='$item_id' and user_id='$users_id' and status='Added to cart'";
        $item_check_result=mysqli_query($connection,$item_check_query) or die(mysqli_error($connection));
        $num_rows=mysqli_num_rows($item_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>
