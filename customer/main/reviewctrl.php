<?php
session_start();

include('cnn.php');

$product_id=$_GET['id'];
//review
if(!isset($_SESSION['user']))
{

    header("Location:rlog/test2.php?pid=$product_id");
}elseif(isset($_POST['review'])){


     
    $customer_id=$_SESSION['user']; 
    $product_id=$_GET['id'];
    $rating=$_POST['rating'];
    $comments=$_POST['comments'];

    $fetchpro=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$product_id'");
    $row=mysqli_fetch_array($fetchpro);
    $productname=$row['ProductName'];
 $product="Product";
$query="INSERT into `feedback`(`Customer_ID`,`Product_ID`,`ProductName`,`Rate`,`Comments`,`ReviewType`)values('$customer_id','$product_id','$productname','$rating','$comments','$product');";
  $sql=mysqli_query($conn,$query);
  if($sql){
    header("Location:viewproduct.php?pid=$product_id");
  }



}


?>