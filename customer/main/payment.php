<?php include('header.php'); ?>
<?php
include('cnn.php');
$fulladdress=$_POST['fulladdress'];

$sessionid=$_SESSION['user'];
$sql=mysqli_query($conn,"UPDATE `customer` SET  `Address2`='$fulladdress' WHERE `MobileNo` = '$sessionid'");

if($sql){
    echo "<script>window.location.href='razorpay/pay.php';</script>";
}
?>




<?php include('footer2.php'); ?>