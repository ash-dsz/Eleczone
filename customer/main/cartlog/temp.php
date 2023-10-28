<?php
session_start();


if(isset($_SESSION['employee'])){

    header("Location:Employee/");
}
elseif(isset($_SESSION['user'])){

    header("Location:../cart.php"); }
else{
    header("Location:test2.php"); 
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="formController.php" method="post">
    <input type="submit" value="logout" name="logout" >
</form>
</body>
</html>