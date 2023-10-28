
<?php
//updating employee

session_start();

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
                        echo "<script>alert('profile updated');window.location.href='index.php';</script>";
                        
                    }
                else
                    {
                       echo "<script>alert('Unkown error occured ');window.location.href='emp-edit.php';</script>";

                    }
        }
    


?>






