<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
    $old_password= md5(md5(mysqli_real_escape_string($connection,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($connection,$_POST['newPassword'])));
    $email=$_SESSION['email'];
    //echo $email;
    $password_from_database_query="select password from users where email='$email'";
    $password_from_database_result=mysqli_query($connection,$password_from_database_query) or die(mysqli_error($connection));
    $row=mysqli_fetch_array($password_from_database_result);
    //echo $row['password'];
    if($row['password']==$old_password){
        $update_password_query="update users set password='$new_password' where email='$email'";
        $update_password_result=mysqli_query($connection,$update_password_query) or die(mysqli_error($connection));
        echo "Your password has been updated.";
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
        //header('location:settings.php');
    }
?>
