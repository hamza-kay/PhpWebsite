<?php session_start(); ?>
<?php

    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $usersid=$_SESSION['id'];
    $user_items_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$usersid'";
    $user_items_result=mysqli_query($connection,$user_items_query) or die(mysqli_error($connection));
    $no_of_user_items= mysqli_num_rows($user_items_result);
    $sum=0;
    if($no_of_user_items==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items are currently in the cart");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_items_result)){
            $sum=$sum+$row['price'];
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>

        <title>London Met Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
               require 'header.php';
            ?>
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php
                        $user_items_result=mysqli_query($connection,$user_items_query) or die(mysqli_error($connection));
                        $no_of_user_items= mysqli_num_rows($user_items_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_items_result)){

                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>£<?php echo $sum;?>/-</th><th><a href="process.php?sum=<?php echo $sum?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy London Metropolitan University. All Rights Reserved. | Contact mhk0070@my.londonmet.ac.uk</p>

               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
