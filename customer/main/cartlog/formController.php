<?php
session_start();
//customer registration

$pid=$_GET['pid'];
$qty=$_GET['qty'];


if(isset($_POST["reg-submit"])){
    include "cnn.php";
    $mobileno = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];


    $query=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$mobileno'");
        if(mysqli_num_rows($query)>0)
        {
            echo "<script>alert('Account Already exists');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";

        }
        elseif($password=='' || $name=='')
        {
          echo "<script>alert('Enter valid data');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";

        }
        elseif(strlen($password)<6){
            echo "<script>alert('Password should have atleast six characters');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
        }
        elseif(strlen($password)>12){
            echo "<script>alert('Password characters are too many');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
        }
        else{

    
            $sql = "INSERT into `customer`(`Name`,`MobileNo`,`Email`,`Password`) values('$name','$mobileno','$email','$password');";
            $result = mysqli_query($conn, $sql);
                if ($result)
                    {

                        $product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
                        $row1=mysqli_fetch_array($product);
                        $user=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$mobileno'");
                        $row2=mysqli_fetch_array($user);


                        $product_id=$pid;
                        $customer_id=$mobileno; 
                        $title=$row1['ProductName'];
                        $price=$row1['Price'];
                        $qty=$qty;

                        if($qty>5){
                            $qty=5;
                        }

                        $total=$price*$qty;



                       $check=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$customer_id' AND `Product_ID`='$product_id'");
                    if(mysqli_num_rows($check)>0){
                        $temp=mysqli_fetch_array($check);
                        $cartid=$temp['Cart_ID'];
                        $total=$qty*$price;
                        $addqty= "UPDATE `cart` SET `qty` ='$qty',`TotalPrice`='$total' WHERE `Cart_ID`='$cartid'";
                        $result = mysqli_query($conn, $addqty);
                    }
                        else{
                                        
                       $sql = "INSERT into `cart`(`Product_ID`,`Customer_ID`,`Title`,`qty`,`price`,`TotalPrice`) 
                        values('$product_id','$customer_id','$title','$qty','$price','$total');";
                        $results = mysqli_query($conn, $sql);
                        }
                    
                    



                        $_SESSION['user']=$mobileno;
                        header("Location:temp.php");  
                    }
                else
                    {
                       echo "Error";
                    }
        }
    
}

//customer login and employee login

if(isset($_POST["login-submit"])){
  
    include "cnn.php";
  
 $mobileno=$_POST["number"];
 $password = $_POST["password"];
    
    $emp=mysqli_query($conn,"SELECT * FROM `employee` WHERE `ContactNo`='$mobileno' AND `Password`='$password'");
 
    if($emp->num_rows>0)
    {
       $row=mysqli_fetch_assoc($emp);
       $currentStatus=$row['Status'];
       if($currentStatus=='De-Active'){
        echo "<script>alert('Access Denied');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";

       }
       else{
        $_SESSION['employee']=$mobileno;
        header("Location:temp.php"); 
       }
    }  

    else
    {

        $result = mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$mobileno' AND `Password`='$password'");
  
        if($result->num_rows >0)
            {

            $row=mysqli_fetch_assoc($result);

            $pid=$_GET['pid'];
            $qty=$_GET['qty'];
            

                        $product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
                        $row1=mysqli_fetch_array($product);
                        $user=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$mobileno'");
                        $row2=mysqli_fetch_array($user);


                        $product_id=$pid;
                        $customer_id=$mobileno; 
                        $title=$row1['ProductName'];
                        $price=$row1['Price'];
                        $qty=$qty;

                        if($qty>5){
                            $qty=5;
                        }

                        $total=$price*$qty;


                     $check=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$customer_id' AND `Product_ID`='$product_id'");
                    if(mysqli_num_rows($check)>0){
                        $temp=mysqli_fetch_array($check);
                        $cartid=$temp['Cart_ID'];
                        $total=$qty*$price;
                        $addqty= "UPDATE `cart` SET `qty` ='$qty',`TotalPrice`='$total' WHERE `Cart_ID`='$cartid'";
                        $result = mysqli_query($conn, $addqty);
                    }
                        else{
                                        
                       $sql = "INSERT into `cart`(`Product_ID`,`Customer_ID`,`Title`,`qty`,`price`,`TotalPrice`) 
                        values('$product_id','$customer_id','$title','$qty','$price','$total');";
                        $results = mysqli_query($conn, $sql);
                        }
                    

            $_SESSION['user']=$mobileno;
            header("Location:temp.php");
                    }
           
        elseif($password=='')
            {
                echo "<script>alert('Enter password to login');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
            }
            elseif(strlen($password)<6){
                echo "<script>alert('Password should have atleast six characters');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
            }
            elseif(strlen($password)>12){
                echo "<script>alert('Password characters are too many');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
            }
         else
            {
                echo "<script>alert('Invalid Mobile Number or Password');window.location.href='test2.php?id=$pid&&qty=$qty';</script>";
            }
   }
}





?>

<?php
session_start();
if(isset($_POST["logout"])){


session_unset();
session_destroy();
header("Location:test2.phpid=$pid&&qty=$qty");

   

}

?>

