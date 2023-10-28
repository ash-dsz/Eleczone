<!DOCTYPE html>
<html lang="en" >
<head>
 <meta charset="UTF-8">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="./style1.css"> 


<link href="<?php echo '../bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<header class="header">
   <div class="col-md-20"><br>
<center><a href="#"><h1 class="m-0 display-5"><span style="color: #DFB163">Razor</span>Pay</h1></a></center>
<br><br>
</header>

<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();
// Create the Razorpay Order
$uid=$_SESSION['user'];
include('../cnn.php');
error_reporting(0);
$mysql=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID` ='$uid'");
while($row=mysqli_fetch_array($mysql)){
    $total+=$row['TotalPrice'];
}
?>


<?php

$amt=$total;
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $amt * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];
 $_SESSION['razorpay_order_id'] = $razorpayOrderId;

$total= $amt;
$displayAmount = $amt;

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amt / 100;
}

 $checkout = 'automatic';

// if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
// {
//     $checkout = $_GET['checkout'];
// }

$data = [
    "key"               => $keyId,
    "amount"            => $amt,
    "name"              => "COOL COMFORT",
    "description"       => "",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
    "name"              => "COOL COMFORT",
    "email"             => "customer@merchant.com",
    "contact"           => "1234567890",
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");

?>
</center>
<style type="text/css">
    body{
            background-color: #0f1e42;
    }
    .razorpay-payment-button{
    overflow: visible;
    padding-left: 294px;
    padding-right: 294px;
    padding-bottom: 16px;
    padding-top: 16px;
    border-radius: 32px;
    margin-left: 30%;
    margin-top: 17%;
    background-image: linear-gradient(to right, rgb(223 177 99), rgb(0 123 255));
    color: white;
    font-weight: 700;
    font-size: 26px;
    border-color: white;
}
</style>