<?php
//employee registration

if(isset($_POST["add-emp"])){
include "cnn.php";
$name=$_POST["ename"];
$image=$_FILES['image']['name'];
$age=$_POST["age"];
$address=$_POST["address"];
$bloodgroup=$_POST["BloodGroup"];
$gender=$_POST["gender"];
$qualfication=$_POST["qualification"];
$adhaarno=$_POST["adhaarNumber"];
$mobileno = $_POST["number"];
$email=$_POST["email"];
$secondno=$_POST["optionalmobileNO"];
$emergencyNo=$_POST["emergencycontactNO"];
$emergconName=$_POST["emergencycontactName"];
$emerconRelation=$_POST["emergencycontactRealtion"];
$emptype=$_POST["emptype"];
$role=$_POST["role"];
$DOJ=$_POST["DOJ"];
$bankno=$_POST["BankaccNO"];
$ifsc=$_POST["IFSC"];
$password =$_POST["password"];
$other1=$_POST["other1"];
$other2=$_POST["other2"];
$status=$_POST["status"];

$query=mysqli_query($conn,"SELECT * FROM `employee` WHERE `ContactNo`='$mobileno'");
                                                    
if(mysqli_num_rows($query)>0)
        {
            echo "<script>alert('Account Already exists');window.location.href='add-emp.php';</script>";

        }
     
        else{

    
            $sql = "INSERT into `employee`(`Name`,`Image`,`Age`,`Address`,`BloodGroup`,`Gender`,`Qualification`,`AdhaarNumber`,`ContactNo`,`Email`,`anotherContactNo`,`EmergencyContact`,`EmergContactName`,`EmergContactRelation`,`EmpType`,`Role`,`DOJ`,`BankNO`,`IFSC`,`Password`,`Other1`,`Other2`,`Status`) 
            values('$name','$image','$age','$address','$bloodgroup','$gender','$qualfication','$adhaarno','$mobileno','$email','$secondno','$emergencyNo','$emergconName','$emerconRelation','$emptype','$role','$DOJ','$bankno','$ifsc','$password','$other1','$other2','$status');";
            $result = mysqli_query($conn, $sql);
                if ($result)
                    {  
                        move_uploaded_file($_FILES["image"]["tmp_name"],"Images/EmpImages/".$_FILES["image"]["name"]);
                        echo "<script>alert('New Employee added');window.location.href='add-emp.php';</script>";
                        
                    }
                else
                    {
                       echo "<script>alert('Unkown error occured ');window.location.href='add-emp.php';</script>";

                    }
        }
    
}

?>

<?php   
//Adding category
if(isset($_POST["btn-newcat"])){
    include "cnn.php";
    $newcat= $_POST["newcategory"];

    $query=mysqli_query($conn,"SELECT * FROM `category` WHERE `CategoryName`='$newcat'");
    if(mysqli_num_rows($query)>0)
    {
        echo "<script>alert('Category Name Already exists');window.location.href='add-product.php';</script>";

    }
    elseif($newcat=='')
    {
      echo "<script>alert('Enter valid data');window.location.href='add-product.php';</script>";

    }
    else{
    $sql = "INSERT into `category`(`categoryName`) values('$newcat');";
    $result = mysqli_query($conn, $sql);
        if ($result)
            {
                echo "<script>alert('New Category added');window.location.href='add-product.php';</script>";

            }
        else
            {
               echo "<script>alert('Unkown error occured ');window.location.href='add-product.php';</script>";

            }
        }
}
?>

<?php

//Removing category
if(isset($_POST["btn-delcat"])){
    include "cnn.php";
    $rmvcat= $_POST["rmvcat"];

    $query=mysqli_query($conn,"DELETE FROM `category` WHERE `CategoryName`='$rmvcat'");
    if($query)
    {
        echo "<script>alert('Category has been removed');window.location.href='mng-product.php';</script>";
        
    }
}
?>

<?php
//Removing employee
if(isset($_POST["employee-delete"])){
    include "cnn.php";
    $rmvemp= $_POST["rmvemp"];
echo $rmvemp;
    // $query=mysqli_query($conn,"DELETE FROM `employee` WHERE `Emp_ID`='$rmvemp'");
    // if($query)
    // {
    //     echo "<script>alert('Employee removed');window.location.href='mng-emp.php';</script>";
        
    // }
}  

?>

<?php
//Removing product
if(isset($_POST["product-delete"])){
    include "cnn.php";
    $rmvproduct= $_POST["pname"];
    $query=mysqli_query($conn,"DELETE FROM `products` WHERE `ProductName`='$rmvproduct'");
    if($query)
    {
     echo "<script>alert('Product removed');window.location.href='mng-product.php';</script>";
        
    }
} 
?>

<?php
//change status of employee 
if(isset($_POST["btn-status"])){
    include "cnn.php";
    $name= $_POST["name"];
    $chnstatus=$_POST["status"];

    $query=mysqli_query($conn,"UPDATE `employee` SET `Status` ='$chnstatus' WHERE `Name`='$name'");
    if($query){
        echo "<script>alert('Employee Status changed');window.location.href='mng-emp.php';</script>";

    }


}
?>

<?php
//change status of product 
if(isset($_POST["product-status"])){
    include "cnn.php";
    $name= $_POST["name"];
    $chnstatus=$_POST["status"];

    $query=mysqli_query($conn,"UPDATE `products` SET `Status` ='$chnstatus' WHERE `ProductName`='$name'");
    if($query){
        echo "<script>alert('Product Status changed');window.location.href='mng-product.php';</script>";

    }


}

?>

<?php

//deleting employee
if(isset($_POST["employee-delete"])){
    include "cnn.php";
    $rmvemp= $_POST["empname"];

    $query=mysqli_query($conn,"DELETE FROM `employee` WHERE `name`='$rmvemp'");
    if($query)
    {
        echo "<script>alert('Employee removed');window.location.href='add-product.php';</script>";
        
    }
}
?>

<?php

//Adding product
if(isset($_POST["add-product"])){
    include "cnn.php";
    $name=$_POST["pname"];
    $description=$_POST["description"];
    $image1=$_FILES['image1']['name'];
    $image2=$_FILES['image2']['name'];
    $image3=$_FILES['image3']['name'];
    $color=$_POST["color"];
    $size=$_POST["size"];
    $status=$_POST["status"];
    $brand=$_POST["brand"];
    $category=$_POST["category"];
    $manufacturerAdd=$_POST["manufactureAddress"];
    $price=$_POST["price"];
    $compareprice=$_POST["comparePrice"];
    $costperitem=$_POST["CostPerItem"];
    


    $query=mysqli_query($conn,"SELECT * FROM `products` WHERE `ProductName`='$name'");

    if($name=='' || $price==''  ){
        echo "<script>alert('Fill every required field..!');window.location.href='add-product.php';</script>";

    } 
   
       else 
        {

            $sql = "INSERT into `products`(`ProductName`,`Description`,`Status`,`Image1`,`Image2`,`Image3`,`Color`,`Size`,`Brand`,`Category`,`Manufacture_add`,`Price`,`ComparePrice`,`CostPerItem`) 
            values('$name','$description','$status','$image1','$image2','$image3','$color','$size','$brand','$category','$manufacturerAdd','$price','$compareprice','$costperitem');";
            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
            move_uploaded_file($_FILES["image1"]["tmp_name"],"Images/ProductImages/".$_FILES["image1"]["name"]);
            move_uploaded_file($_FILES["image2"]["tmp_name"],"Images/ProductImages/".$_FILES["image2"]["name"]);
            move_uploaded_file($_FILES["image3"]["tmp_name"],"Images/ProductImages/".$_FILES["image3"]["name"]);
            echo "<script>alert('New Product added');window.location.href='mng-product.php';</script>";
            }
      
        else
            {
               echo "<script>alert('Unkown error occured ');window.location.href='add-product.php';</script>";

            }

           
        }}

        ?>

<?php

//updating product

if(isset($_POST["update-product"])){
    include "cnn.php";


    $oldimg1=$_POST["oldimg1"];
    $oldimg2=$_POST["oldimg2"];
    $oldimg3=$_POST["oldimg3"];
    $id=$_POST["id"];
    $name=$_POST["pname"];
    $description=$_POST["description"];
    $color=$_POST["color"];
    $size=$_POST["size"];
    $status=$_POST["status"];
    $brand=$_POST["brand"];
    $category=$_POST["category"];
    $manufacturerAdd=$_POST["manufactureAddress"];
    $price=$_POST["price"];
    $compareprice=$_POST["comparePrice"];
    $costperitem=$_POST["CostPerItem"];

    $product_img1 = $_FILES['image1']['name'];
    $product_img2 = $_FILES['image2']['name'];
    $product_img3 = $_FILES['image3']['name'];
    
    
    $temp_name1 = $_FILES['image1']['tmp_name'];
    $temp_name2 = $_FILES['image2']['tmp_name'];
    $temp_name3 = $_FILES['image3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"Images/productImages/$product_img1");
    move_uploaded_file($temp_name2,"Images/productImages/$product_img2");
    move_uploaded_file($temp_name3,"Images/productImages/$product_img3");
    
    
    if($product_img1==''){
        $product_img1=$oldimg1;
    }
    if($product_img2==''){
        $product_img2=$oldimg2;
    }
    if($product_img3==''){
        $product_img3=$oldimg3;
    }

   

    $query=mysqli_query($conn,"SELECT * FROM `products` WHERE `ProductName`='$name'");

    if($name=='' || $price==''  ){
        echo "<script>alert('Fill every required field..!');window.location.href='mng-product.php';</script>";

    } 
       else 
        {

            $sql = "UPDATE `products` SET `ProductName`= '$name',`Description`= '$description',`Status`='$status',`Image1`='$product_img1',
            `Image2`='$product_img2',`Image3`='$product_img3',`Color`='$color',`Size`='$size',`Brand`='$brand',`Category`='$category',
            `Manufacture_add`='$manufacturerAdd',`Price`='$price',`ComparePrice`='$compareprice',`CostPerItem`='$costperitem' WHERE `Product_ID`='$id'";
            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
              // echo "$oldimg1";
              echo "<script>alert(' Product updated added');window.location.href='mng-product.php';</script>";
            }
      
        else
            {
               echo "<script>alert('Unkown error occured ');window.location.href='mng-product.php';</script>";

            }

           
        }}

?>

<?php
//updating employee



if(isset($_POST["edit-emp"])){
include "cnn.php";
$id=$_POST['eid'];
$name=$_POST["ename"];
$oldimg=$_POST["oldimg"];
$age=$_POST["age"];
$address=$_POST["address"];
$bloodgroup=$_POST["BloodGroup"];
$gender=$_POST["gender"];
$qualfication=$_POST["qualification"];
$adhaarno=$_POST["adhaarNumber"];
$mobileno = $_POST["mobileNo"];
$email=$_POST["email"];
$secondno=$_POST["optionalmobileNO"];
$emergencyNo=$_POST["emergencycontactNO"];
$emergconName=$_POST["emergencycontactName"];
$emerconRelation=$_POST["emergencycontactRealtion"];
$emptype=$_POST["emptype"];
$role=$_POST["role"];
$DOJ=$_POST["DOJ"];
$bankno=$_POST["BankaccNO"];
$ifsc=$_POST["IFSC"];
$password =$_POST["password"];
$other1=$_POST["other1"];
$other2=$_POST["other2"];
$status=$_POST["status"];


$product_img1 = $_FILES['image']['name'];

$temp_name1 = $_FILES['image']['tmp_name'];

move_uploaded_file($temp_name1,"Images/EmpImages/$product_img1");

if($product_img1==''){
    $product_img1=$oldimg;
}

$query=mysqli_query($conn,"SELECT * FROM `employee` WHERE `Emp_ID`='$id'");
                                                    

            $sql = "UPDATE `employee` SET `Name`= '$name',`Image`= '$product_img1',`Age`='$age',`Address`='$address',`BloodGroup`='$bloodgroup',`Gender`='$gender',`Qualification`='$qualfication',`AdhaarNumber`='$adhaarno',`ContactNo`='$mobileno',`Email`='$email',
            `anotherContactNo`='$secondno',`EmergencyContact`='$emergencyNo',`EmergContactName`='$emergconName',`EmergContactRelation`='$emerconRelation',
            `EmpType`='$emptype',`Role`='$role',`DOJ`='$DOJ',`BankNO`='$bankno',`IFSC`='$ifsc',`Password`='$password',`Other1`='$other1',`Other2`='$other2',`Status`='$status' WHERE `Emp_ID`='$id'";

            $result = mysqli_query($conn,$sql);
                if ($result)
                    {  
                        move_uploaded_file($_FILES["image"]["tmp_name"],"Images/EmpImages/".$_FILES["image"]["name"]);
                        echo "<script>alert('Updated Employee added');window.location.href='mng-emp.php';</script>";
                        
                    }
                else
                    {
                       echo "<script>alert('Unkown error occured ');window.location.href='mng-emp.php';</script>";

                    }
        }
    


?>



<?php
//assigning employee to service

if(isset($_POST['assign'])){
include('cnn.php');
$empname=$_POST['ename'];
$sid=$_POST['serviceid'];
$pending="Pending";

 
 $sql=mysqli_query($conn,"UPDATE `servicerequests` SET `Status`='$pending',`AssignedEmp`='$empname' WHERE `Service_ID`='$sid'");
 if ($sql)
 {  
   echo "<script>alert('Employee assigned to new task');window.location.href='servicerequests.php';</script>";
     
 }
else
 {
    echo "<script>alert('Unkown error occured ');window.location.href='mng-emp.php';</script>";

 }



}



?>


<?php
//product delivered
include('cnn.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $status="Delivered";
    $sql=mysqli_query($conn,"UPDATE `neworders` SET `Status`='$status' WHERE `InvoiceNo`='$id'");
    if ($sql)
    {  
      echo "<script>alert('Product Updated');window.location.href='index.php';</script>";
        
    }
   else
    {
       echo "<script>alert('Unkown error occured ');window.location.href='index.php';</script>";
   
    }
}

?>