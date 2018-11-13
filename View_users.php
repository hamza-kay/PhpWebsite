<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scroll">
    <h1 align="center">Admin Panel</h1>
    <h2 align="center">Users</h2>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


  <table class="table table-striped table-dark">

        <thead>
         <tbody>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">User Name</th>
            <th scope="col">User E-mail</th>
            <th scope="col">User Pass</th>
            <th scope="col">Delete User</th>
        </tr>
        </thead>

        <?php
        include("connection.php");
        $view_query="select * from users";
        $run=mysqli_query($connection,$view_query);

        while($arrayr=mysqli_fetch_array($run)) // array r = row
        {
            $id=$arrayr[0];
            $name=$arrayr[1];
            $email=$arrayr[2];
            $password=$arrayr[3];
        ?>
        <tr>
            <td><?php echo $id;  ?></td>
            <td><?php echo $name;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $password;  ?></td>
            <td><a href="delete0.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>
</tbody>
        <?php } ?>
    </table>
        </div>
</div>
<div class="table-scroll">
    <h2 align="center">Items</h2>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
  <table class="table table-striped table-dark">

        <thead>
         <tbody>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <?php
        include("connection.php");
        $view_query="select * from items";
        $run1=mysqli_query($connection,$view_query);
        while($row1=mysqli_fetch_array($run1))// loop to store into row1 array
        {
            $id=$row1[0];
            $name=$row1[1];
            $price=$row1[2];




        ?>

        <tr>
            <td><?php echo $id;  ?></td>
            <td><?php echo $name;  ?></td>
            <td><?php echo $price;  ?></td>

            <td><a href="delete1.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>
</tbody>
        <?php } ?>

    </table>
        </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
    <h2>Add New Product</h2>
    <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO items (id, name, price)
    VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["price"]."')";

    $result = mysqli_query($connection,$sql);
}

?>



<form action="View_users.php" method="post">
<label id="first"> Product ID:</label><br/>
<input type="text" name="id"><br/>

<label id="first">Product Name</label><br/>
<input type="text" name="name"><br/>

<label id="first">Product Price</label><br/>
<input type="text" name="price"><br/>

<button type="submit" name="save">Add Product</button>

</form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
