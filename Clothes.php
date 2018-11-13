<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>

        <title>London Metropolitan Universty Shop</title>
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
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to the store!</h1>
                    <p>The best place to shop for Students.</p>
                </div>
            </div>
            <div class="container">

                  <div class="row">
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="img/men1.jpg" alt="Mens Jumper" height="152" width="152">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>Topman Jumper</h3>
                                      <p>Price: £50.00</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(5)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="add_to_cart.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="img/woman1.jpg" alt="Womens Jumper" height="152" width="152">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>Carl Jumper</h3>
                                      <p>Price:  £20.00</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(6)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="add_to_cart.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="img/raymond.jpg" alt="Topman shirt" height="200" width="200">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>Topman Shirt</h3>
                                      <p>Price: £35.00</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(9)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="add_to_cart.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                          <div class="thumbnail">
                              <a href="cart.php">
                                  <img src="img/charles.jpg" alt="Charles shirt" height="200" width="200">
                              </a>
                              <center>
                                  <div class="caption">
                                      <h3>Ballenciaga</h3>
                                      <p>Price: £35.00</p>
                                      <?php if(!isset($_SESSION['email'])){  ?>
                                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                          <?php
                                          }
                                          else{
                                              if(check_if_added_to_cart(10)){
                                                  echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                              }else{
                                                  ?>
                                                  <a href="add_to_cart.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                  <?php
                                              }
                                          }
                                          ?>
                                  </div>
                              </center>
                          </div>
                      </div>
                </div>

                <div class="row">
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <a href="cart.php">
                              <img src="img/HXR.jpg" alt="Armani" height="173" width="173" >
                          </a>
                          <center>
                              <div class="caption">
                                  <h3>Armani Shirt</h3>
                                  <p>Price: £40.00</p>
                                  <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                      <?php
                                      }
                                      else{
                                          if(check_if_added_to_cart(11)){
                                              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                          }else{
                                              ?>
                                              <a href="add_to_cart.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                              <?php
                                          }
                                      }
                                      ?>
                              </div>
                          </center>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <a href="cart.php">
                              <img src="img/pink.jpg" alt="HUGO BOSS" height="177" width="177">
                          </a>
                          <center>
                              <div class="caption">
                                  <h3>Hugo Boss Shirt</h3>
                                  <p>Price: £50.00</p>
                                  <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                      <?php
                                      }
                                      else{
                                          if(check_if_added_to_cart(12)){
                                              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                          }else{
                                              ?>
                                              <a href="add_to_cart.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                              <?php
                                          }
                                      }
                                      ?>
                              </div>
                          </center>
                      </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <a href="cart.php">
                              <img src="img/redshirt.jpg" alt="red shirt" height="115" width="115">
                          </a>
                          <center>
                              <div class="caption">
                                  <h3>Womens Casual Shirt</h3>
                                  <p>Price: £15.00</p>
                                  <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                      <?php
                                      }
                                      else{
                                          if(check_if_added_to_cart(24)){
                                              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                          }else{
                                              ?>
                                              <a href="add_to_cart.php?id=24" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                              <?php
                                          }
                                      }
                                      ?>
                              </div>
                          </center>
                      </div>
                  </div>

                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail">
                          <a href="cart.php">
                              <img src="img/denimshirt.jpg" alt="denim shirt" height="124" width="124">
                          </a>
                          <center>
                              <div class="caption">
                                  <h3>Womens Denim Shirt</h3>
                                  <p>Price: £23.00</p>
                                  <?php if(!isset($_SESSION['email'])){  ?>
                                      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                      <?php
                                      }
                                      else{
                                          if(check_if_added_to_cart(23)){
                                              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                          }else{
                                              ?>
                                              <a href="add_to_cart.php?id=23" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                              <?php
                                          }
                                      }
                                      ?>
                              </div>
                          </center>
                      </div>
                  </div>


                  </div>

                </div>
                <br><br><br><br><br><br><br><br>
               <footer class="footer">
                   <div class="container">
                   <center>
                       <p>Copyright &copy London Metropolitan University. All Rights Reserved. | Contact Us: mhk0070@my.londonmet.ac.uk</p>

                   </center>
                   </div>
               </footer>
            </div>
        </body>
    </html>
