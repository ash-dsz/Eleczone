<?php
session_start();
include('cnn.php');


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
      echo "<script>alert('New Order Placed');window.location.href='index.php';</script>";
   }
   else{
       echo "<script>alert('Error Occured');window.location.href='payment.php';</script>";

   }
   }
//    }else{
//        echo "<script>alert('Error Occured');window.location.href='payment.php';</script>";

//    }



  }



// }
// else{
//    echo "<script>alert('Incorrect Captcha');window.location.href='delivery.php';</script>";
// }

// }
// $email=$_SESSION['customer_email'];

//     $sel="SELECT * FROM `customers` WHERE `customer_email`='$email'";

// $run = mysqli_query($con,$sel);
// $row=mysqli_fetch_array($run);
// $cid=$row['c_id'];


// foreach ($_SESSION["cart_item"] as $item)
// {
// 	$date=date("Y-m-d");
//     $item_qty = $item["quantity"];
//     $item_name = $item["name"];
//     $item_price = $item["price"];
//     $item_p_id = $item["p_id"];
//     $invo=rand(10000000,10000000000);
//     $ins="INSERT INTO `customer_orders`(`customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`, `product_id`) VALUES ('$cid','$item_price','$invo','$item_qty','$date','Paid','$item_p_id')";
//     $run = mysqli_query($con,$ins);
//     unset($_SESSION['cart_item']);

//     $del="DELETE FROM `cart` WHERE `c_id`='$cid'";
//     $run = mysqli_query($con,$del);

//      $insp="INSERT INTO `pending_orders`(`customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`,`amount_status`) VALUES ('$cid','$invo','$item_p_id','$item_qty','pending','Paid')";
//     $runp = mysqli_query($con,$insp);
//     echo '<script>window.location.href = "index.php";</script>';

                               
?>