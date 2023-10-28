<?php 
session_start();
?>
<?php 

include('cnn.php');



//adding new product to cart
if(!isset($_SESSION['user']))
{


    $proid=$_GET['pid'];
    $qty=$_POST['qty'];
    header("Location:cartlog/test2.php?id=$proid&&qty=$qty");
}


elseif(isset($_POST["add-cart"]))
{



   


  
    $customerid= $_SESSION['user']; 
    $productid=$_GET['pid'];



$product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$productid'");
$row1=mysqli_fetch_array($product);
$user=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$customerid'");
$row2=mysqli_fetch_array($user);


$product_id=$row1['Product_ID'];
$customer_id=$_SESSION['user']; 
$title=$row1['ProductName'];
$price=$row1['Price'];
$qty=$_POST['qty'];
$orderdate=$date;

if($qty>5){
    $qty=5;
}

$total=$price*$qty;

$check=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$customer_id' AND `Product_ID`='$productid'");
if(mysqli_num_rows($check)>0){
    $temp=mysqli_fetch_array($check);
    $cartid=$temp['Cart_ID'];
    $total=$qty*$price;
    $addqty= "UPDATE `cart` SET `qty` ='$qty',`TotalPrice`='$total' WHERE `Cart_ID`='$cartid'";
    $result = mysqli_query($conn, $addqty);
    if ($result)
        {  
            header("Location:cart.php"); 
        }
    }



else{

$sql = "INSERT into `cart`(`Product_ID`,`Customer_ID`,`Title`,`qty`,`price`,`TotalPrice`) 
values('$product_id','$customer_id','$title','$qty','$price','$total');";
$result = mysqli_query($conn, $sql);
    if ($result)
        {  
            header("Location:cart.php"); 
        }
   
    }

}

//removing product from cart
if(isset($_GET['cid']))
{
    $cartid=$_GET['cid'];
    $sql=mysqli_query($conn,"DELETE FROM `cart` WHERE `Cart_ID`='$cartid'");
    header("Location:cart.php");
    

}





?> 




<?php
//cancel order
if(isset($_GET['orderid']))
{
    $orderid=$_GET['orderid'];
    $status="cancelled";
    $sql=mysqli_query($conn,"UPDATE `neworders` SET `Status`='$status' WHERE `Order_ID`='$orderid'");
    echo "<script>alert('Order Cancelled');window.location.href='myorders.php';</script>";
    

}

?>




<?php
//cancel service
if(isset($_POST['cancel-service']))
{
    $invoice=$_POST['invoice'];
    echo $invoice;
    $status="cancelled";
    $sql=mysqli_query($conn,"UPDATE `servicerequests` SET `Status`='$status' WHERE `InvoiceNo`='$invoice'");
    echo "<script>alert('Service Order Cancelled');window.location.href='service.php?id=$invoice';</script>";
    

}

?>