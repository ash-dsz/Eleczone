

<!DOCTYPE html>
<html lang="en" >
<head>
 <meta charset="UTF-8">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="./style1.css">


<link href="<?php echo '../bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<header class="header">
   <div class="col-md-12"><br>
<center><a href="index.php"><img src="../assets/img/sialogo.png"></a></center>
<br><br>
</header>

<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

if(!isset($_SESSION['uid'])){
	header("Location:../student_login.php");
}

$uid = $_SESSION['uid'];

include("../dbconnect_exam.php");

$amt = 0;

$sql = "select * from `savsoft_users` u,`user_payment` p where u.`uid`=p.`uid` and u.`uid`='$uid'";
$res = $lnk->query($sql);
while($row=mysqli_fetch_array($res)){
	$name = $row['first_name'];
	$phone = $row['contact_no'];
	$email = $row['email'];
	$amt = $row['amount'];
	$course = $row['course'];
	$duration = $row['duration'];
	$referral_code = $row['referral_code'];
}

/*if($course=="online_course"&&$duration=="one_year"){
	$fees = "3,000";
	$total = "3,999";
	$consation = "0";
}
else if($course=="online_course"&&$duration=="life_time"&&$referral_code=="ONLINE50"){
	$fees = "10,000";
	$total = "5,999";
	$consation = "5,000";
}
else if($course=="online_course"&&$duration=="life_time"&&$referral_code=="SIA100"){
	$fees = "10,000";
	$total = "999";
	$consation = "10,000";
}
else if($course=="online_course"&&$duration=="life_time"&&$referral_code==""){
	$fees = "10,000";
	$total = "10999";
	$consation = "0";
}
else if($course=="online_course"&&$duration=="life_time"&&$referral_code!="SIA100"&&$referral_code!="ONLINE50"){
	$fees = "10,000";
	$total = "10999";
	$consation = "0";
}
else{
	$fees = "3,000";
	$total = "3,999";
	$consation = "0";
}*/


if($course=="online_course"){
	if($duration=="one_year"&&$referral_code=="SIA20"){
		$fees = "3,000";
		$total = "1,999";
		$consation = " 2,000";
	}
	elseif($duration=="one_year"&&$referral_code!=""){
		$fees = "3,000";
		$total = "3,999";
		$consation = "0";
	}
	elseif($duration=="life_time"&&$referral_code=="ONLINE50"){
		$fees = "10,000";
		$total = "5,999";
		$consation = " 5,000";
	}
	elseif($duration=="life_time"&&$referral_code!=""){
		$fees = "10,000";
		$total = "10,999";
		$consation = "0";
	}
}
else{
	if($duration=="weekly_basic"&&$referral_code=="SIABASIC"){
		$fees = "40,000";
		$total = "29,999";
		$consation = "11,000";
	}
	elseif($duration=="weekly_basic"&&$referral_code!="SIABASIC"){
		$fees = "40,000";
		$total = "40,999";
		$consation = "0";
	}
	elseif($duration=="weekly_ias_kas"&&$referral_code=="SIA35"){
		$fees = "60,000";
		$total = "39,999";
		$consation = "21,000";
	}
	elseif($duration=="weekly_ias_kas"&&$referral_code!="SIA35"){
		$fees = "60,000";
		$total = "60,999";
		$consation = "0";
	}
	elseif($duration=="sunday_general"&&$referral_code=="SIA20"){
		$fees = "30,000";
		$total = "24,999";
		$consation = "6,000";
	}
	elseif($duration=="sunday_general"&&$referral_code!="SIA20"){
		$fees = "30,000";
		$total = "30,999";
		$consation = "0";
	}
	elseif($duration=="sunday_ug"&&$referral_code=="SIAUG"){
		$fees = "30,000";
		$total = "19,999";
		$consation = "11,000";
	}
	elseif($duration=="sunday_ug"&&$referral_code!="SIAUG"){
		$fees = "30,000";
		$total = "30,999";
		$consation = "0";
	}
	elseif($duration=="seniors"&&$referral_code=="SIA50"){
		$fees = "40,000";
		$total = "19,999";
		$consation = "21,000";
	}
	elseif($duration=="seniors"&&$referral_code!="SIA50"){
		$fees = "40,000";
		$total = "40,999";
		$consation = "0";
	}
}

?>

<center>&nbsp;<font size="5"><b>Payment</b></font><br/><br/>
&nbsp;<font size="4">Registration Fee : 999<br/><br/>
&nbsp;Course Fee : <?php echo $fees; ?><br/><br/>
&nbsp;Concession : <?php echo $consation; ?><br/><br/>
&nbsp;Total Fee : <?php echo $total; ?><br/><br/></font>

<?php

// Create the Razorpay Order

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

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

/*if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}*/

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Sarvajna IAS Academy",
    "description"       => "",
    "image"             => "../assets/img/toplogo.png",
    "prefill"           => [
    "name"              => "$name",
    "email"             => "$email",
    "contact"           => "$phone",
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
