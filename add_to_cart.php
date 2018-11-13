<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $itemsid=$_GET['id'];
    $usersid=$_SESSION['id'];
    $add_to_cart_query="insert into users_items(user_id,item_id,status) values ('$usersid','$itemsid','Added to cart')";
    $add_carts_reslt=mysqli_query($connection,$add_to_cart_query) or die(mysqli_error($connection));
    header('location: cart.php');
?>
