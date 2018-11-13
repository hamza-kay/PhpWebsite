<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($connection,$_POST['name']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Email address is incorrect, redirecting you to registration";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($connection,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password needs to have atleast 6 characters, redirecting you to registration";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($connection,$_POST['city']);
    $address=mysqli_real_escape_string($connection,$_POST['address']);
    $user_exists_already_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($connection,$user_exists_already_query) or die(mysqli_error($connection));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){

    ?>
        <script>
            window.alert("Email already exists!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />


        <?php
        }else{
            $registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";

            $registration_result=mysqli_query($connection,$registration_query) or die(mysqli_error($connection));
            echo "Successfully Registered";
            $_SESSION['email']=$email;
            //mysqli insertidd function retrns id generatd with AUTO_INCREMENT used in lastquery
            $_SESSION['id']=mysqli_insert_id($connection);

            ?>
            <meta http-equiv="refresh" content="3;url=index.php" />
            <?php
        }

    ?>
