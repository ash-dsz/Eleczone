<?php
session_start();
//customer registration
$invoice=$_GET['id'];
if(isset($_POST["reg-submit"])){
    include "cnn.php";
    $mobileno = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
   

    $query=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$mobileno'");
        if(mysqli_num_rows($query)>0)
        {
            echo "<script>alert('Account Already exists');window.location.href='test2.php?id=$invoice';</script>";

        }
        elseif($password=='' || $name=='')
        {
          echo "<script>alert('Enter valid data');window.location.href='test2.php?id=$invoice';</script>";

        }
        elseif(strlen($password)<6){
            echo "<script>alert('Password should have atleast six characters');window.location.href='test2.php?id=$invoice';</script>";
        }
        elseif(strlen($password)>12){
            echo "<script>alert('Password characters are too many');window.location.href='test2.php?id=$invoice';</script>";
        }
        else{

    
            $sql = "INSERT into `customer`(`Name`,`MobileNo`,`Email`,`Password`) values('$name','$mobileno','$email','$password');";
            $result = mysqli_query($conn, $sql);
                if ($result)
                    {
                        $_SESSION['user']=$mobileno;
                        header("Location:temp.php?id=$invoice");  
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
        echo "<script>alert('Access Denied');window.location.href='test2.php?id=$invoice';</script>";

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
            $_SESSION['user']=$mobileno;
            header("Location:temp.php?id=$invoice");
            }
        elseif($password=='')
            {
                echo "<script>alert('Enter password to login');window.location.href='test2.php?id=$invoice';</script>";
            }
            elseif(strlen($password)<6){
                echo "<script>alert('Password should have atleast six characters');window.location.href='test2.php?id=$invoice';</script>";
            }
            elseif(strlen($password)>12){
                echo "<script>alert('Password characters are too many');window.location.href='test2.php?id=$invoice';</script>";
            }
         else
            {
                echo "<script>alert('Invalid Mobile Number or Password');window.location.href='test2.php?id=$invoice';</script>";
            }
   }
}





?>

<?php
session_start();
if(isset($_POST["logout"])){


session_unset();
session_destroy();
header("Location:test2.php?id=$invoice");

   

}

?>

