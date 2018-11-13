<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $total=$_GET['sum'];

    }

    //Here we can use PayPal URL or sandbox URL.
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id.
$merchant_email = 'shop@londonmet.com';
//here we can put cancel URL when payment is not completed.
$cancel_return = "http://".$_SERVER['HTTP_HOST'].'/cart.php';
//here we can put cancel URL when payment is Successful.
$success_return = "http://".$_SERVER['HTTP_HOST'].'/success.php';
//PayPal call this file for ipn
$notify_url = "http://".$_SERVER['HTTP_HOST'].'/cart.php';

?>

<div style="margin-left: 38%"><img src="images/ajax-loader.gif"/><img src="images/processing_animation.gif"/></div>
<form name="myform" action="<?php echo $paypal_url;?>" method="post">
<input type="hidden" name="business" value="<?php echo $merchant_email;?>" />
<input type="hidden" name="notify_url" value="<?php echo $notify_url;?>" />
<input type="hidden" name="cancel_return" value="<?php echo $cancel_return;?>" />
<input type="hidden" name="return" value="<?php echo $success_return;?>" />
<input type="hidden" name="rm" value="2" />
<input type="hidden" name="lc" value="" />
<input type="hidden" name="no_shipping" value="1" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="currency_code" value="GBP" />
<input type="hidden" name="page_style" value="paypal" />
<input type="hidden" name="charset" value="utf-8" />
<input type="hidden" name="item_name" value="HeadPhone" />
<input type="hidden" name="cbt" value="Back to FormGet" />
<input type="hidden" value="_xclick" name="cmd"/>
<input type="hidden" name="amount" value="<?php echo $total;?>">
<script type="text/javascript">
document.myform.submit();
</script>
<?php

// $total variable is assigned from the cart.php using get method. Which gets the $sum variable which represents the total in the cart.
