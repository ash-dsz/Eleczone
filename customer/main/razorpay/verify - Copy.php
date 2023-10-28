<?php

require('config.php');
//$lnk=mysqli_connect("localhost","root","","sarvajna_exam") or die("error connecting db");
include("../dbconnect_exam.php");

session_start();

$uid = $_SESSION['uid'];

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";
$shopping_order_id = $_POST['shopping_order_id'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$amount = $_POST['amount']/100;

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
	$payment_id = $_POST['razorpay_payment_id'];
    
	$sql = "DELETE FROM `payment_details` WHERE `uid`='$uid'";
	$lnk->query($sql);
	
	$sql = "INSERT INTO `payment_details`( `uid`, `email`, `phone`, `amount`, `status`,`payment_id`) VALUES ('$uid','$email','$contact','$amount','success','$payment_id')";
	$lnk->query($sql);

	$html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p><br/>$shopping_order_id<br/>$contact";
			 
	header("Location:../msg.php?msg=success");
}
else
{
	$payment_id = $error;
    
	$sql = "DELETE FROM `payment_details` WHERE `uid`='$uid'";
	$lnk->query($sql);
	
	$sql = "INSERT INTO `payment_details`( `uid`, `email`, `phone`, `amount`, `status`) VALUES ('$uid','$email','$contact','$amount','failed')";
	$lnk->query($sql);
	
	$html = "<p>Your payment failed</p>
             <p>{$error}</p>";
			 
	header("Location:../msg.php?msg=error");
}

//echo $html;
