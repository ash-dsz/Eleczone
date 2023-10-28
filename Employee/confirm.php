
<?php
//confirm the service 

if(isset($_GET['serviceid'])){
include('cnn.php');
$sid=$_GET['serviceid'];
$confirm="Confirm";

 
 $sql=mysqli_query($conn,"UPDATE `servicerequests` SET `Status`='$confirm' WHERE `Service_ID`='$sid'");
 if ($sql)
 {  
   echo "<script>alert('Request Customer to confirm the service');window.location.href='servicerequests.php';</script>";
     
 }
else
 {
    echo "<script>alert('Unkown error occured ');window.location.href='mng-emp.php';</script>";

 }



}