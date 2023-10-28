<?php session_start(); ?>




<?php
//new service request
include('cnn.php');
if(isset($_POST['service-request'])){
  
        $invoice=$_POST['invoiceno'];
        $name=$_POST['name'];
        $number=$_POST['number'];
        $address=$_POST['address'];
        $productname=$_POST['productname'];       
        $issue=$_POST['issuetitle'];
        $description=$_POST['description'];
        $status="New";
        $assign="No Employee Assigned Yet";
        $orderdate=date("Y/m/d");

        if($address==' '){
            echo "<script>alert('Something is missing');window.location.href='requestservices.php?invoice=$invoice';</script>";
        }
else{


        
        $newservice="INSERT into `servicerequests`(`InvoiceNo`,`Name`,`ContactNo`,`Address`,`ProductName`,`IssueTitle`,`Desciption`,`Status`,`AssignedEmp`,`orderdate`)values('$invoice','$name','$number','$address','$productname','$issue','$description','$status','$assign','$orderdate');";
        $insert=mysqli_query($conn,$newservice);
        if($insert){
         
            echo "<script>alert('Your complaint has been filed');window.location.href='requestservice.php?invoice=$invoice';</script>";
        }
        else{
            echo "<script>alert('Error Occured');window.location.href='Location:../requestservices.php?invoice=$invoice';</script>";

        }
    }
}
?>



<?php
//customer confirming service

if(isset($_POST['confirm'])){
include('cnn.php');

$customer_id=$_SESSION['user']; 
$service_id=$_POST['serviceid'];
$productname=$_POST['productname'];
$issuetitle=$_POST['issuetitle'];
$rating=$_POST['rating'];
$comments=$_POST['comments'];
$Reviewtype="Service";


$query="INSERT into `feedback`(`Customer_ID`,`Service_ID`,`ProductName`,`IssueTitle`,`Rate`,`Comments`,`ReviewType`)values('$customer_id','$service_id','$productname','$issuetitle','$rating','$comments','$Reviewtype');";
$sql=mysqli_query($conn,$query);
$complete="Completed";
$update=mysqli_query($conn,"UPDATE servicerequests SET Status='$complete' WHERE Service_ID='$service_id'");
if($sql){
    echo "<script>alert('Verification confirmed');window.location.href='index.php';</script>";
}



}


?>



<?php
//updating customer details
if(isset($_POST['edit-customer'])){
    include('cnn.php');
    $name=$_POST['name'];
    $userid=$_POST['userid'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $landmark=$_POST['landmark'];
    $newpincode=$_POST['pincode'];
    
    $sessionid=$_SESSION['user'];
    
    $sql=mysqli_query($conn,"UPDATE `customer` SET  `Name`='$name',`MobileNo`='$userid',`Email`='$email',`Address`='$address',`State`='$state',`City`='$city',`Landmark`='$landmark',`Pincode`='$newpincode' WHERE `MobileNo` = '$sessionid'");
   
   if($userid!==$sessionid){
    echo "<script>window.location.href='../../test2.php';</script>";
   }
    if($sql){
        echo "<script>alert('Profile Updated');window.location.href='index.php';</script>";

    }

}



?>

