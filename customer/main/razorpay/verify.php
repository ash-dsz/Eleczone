<?php
session_start();
include('../cnn.php');


    $id=$_SESSION['user'];
  $cartitems=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID` = '$id'");
  while($row=mysqli_fetch_array($cartitems)){
    $fetchadd=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$id'");
    $fetchadd2=mysqli_fetch_array($fetchadd);
    $address=$fetchadd2['Address2'];
   $pid=$row['Product_ID'];
   $qty=$row['qty'];
   $totalprice=$row['TotalPrice'];     
   $cartid=$row['Cart_ID'];
   $orderdate=date("Y/m/d");
   $status="New";
   $invo=rand(10000000,10000000000);
   
   $newservice="INSERT into `neworders`(`Customer_ID`,`Product_ID`,`Qty`,`Price`,`Address`,`orderdate`,`InvoiceNo`,`Status`)values('$id','$pid','$qty','$totalprice','$address','$orderdate','$invo','$status');";
   $insert=mysqli_query($conn,$newservice);
   if($insert){
       $deletecart=mysqli_query($conn,"DELETE FROM `cart` WHERE `Cart_ID`='$cartid'");
       if($deletecart){
?>



<?php

   }
   else{
       echo "<script>alert('Error Occured');window.location.href='payment.php';</script>";

   }
   }
//    }else{
//        echo "<script>alert('Error Occured');window.location.href='payment.php';</script>";

//    }



  }
?>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <form method="POST" action="../index.php">
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Payment Transfered Successfully</p>
        <p>Enjoy your product</p>
        <br><br>
        <a href="../index.php"><input type="submit" class="Conti" value="Continue"></a>

      </div>
      </form>
    </body>
    <style type="text/css">
      .Conti{
        padding-left: 31px;
    padding-right: 31px;
    border-radius: 36px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-weight: 700;
    font-size: 19px;
      }
    </style>
</html>
