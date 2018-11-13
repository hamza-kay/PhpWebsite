<?php

include("connection.php");
$delete_id=$_GET['del'];
$del_query="delete from users_items WHERE user_id='$delete_id'";//delete query
$runforeign=mysqli_query($connection,$del_query);

if($runforeign){
  $delete_primary="delete from items WHERE id='$delete_id'";
  $runprimary=mysqli_query($connection,$delete_primary);
  if($runprimary){
    echo "<script>window.open('View_users.php?deleted=item has been deleted','_self')</script>";
  }
}


?>
