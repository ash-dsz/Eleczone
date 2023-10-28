<?php
session_start();

$invoice=$_GET['id'];
if(isset($_SESSION['employee'])){

    header("Location:Employee/");
}
elseif(isset($_SESSION['user'])){

    header("Location:../requestservices.php?invoice=$invoice"); }
else{
    header("Location:test2.php"); 
}


?>



