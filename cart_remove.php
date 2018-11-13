<?php
    require 'connection.php';
    session_start();
    $itemsid=$_GET['id'];
    $usersid=$_SESSION['id'];
    $del_query="delete from users_items where user_id='$usersid' and item_id='$itemsid'";
    $del_query_results=mysqli_query($connection,$del_query) or die(mysqli_error($connection));
    header('location: cart.php');
?>
