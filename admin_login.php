
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Admin Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin Login</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="admin_login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("connection.php");

if(isset($_POST['admin_login']))//if admin login details posted
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $adminquery="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $runquery=mysqli_query($connection,$adminquery);

    if(mysqli_num_rows($runquery)>0)
    {

        echo "<script>window.open('View_users.php','_self')</script>";
    }
    else {echo"<script>alert('Login Credentials provided are not correct')</script>";}

}

?>
