<?php include("header.php");?>
<?php include("cnn.php");?>




<form action="formController.php" method="post" enctype="multipart/form-data">

        <div class="page-wrapper">
       
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Add new employee</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Employee</li>
                                </ol>
                            </nav>
                        </div>
                    </div>


<?php

if(isset($_POST['emp-edit'])){

    $id=$_POST['eid'];
    $getemp=mysqli_query($conn,"SELECT * FROM `employee` WHERE `Emp_ID`='$id'");
    $row=mysqli_fetch_array($getemp);  
$id=$row['Emp_ID'];
$img=$row['Image'];
$name=$row['Name'];
$age=$row['Age'];
$address=$row['Address'];
$BloodGroup=$row['BloodGroup'];
$gender=$row['Gender'];
$qualification=$row['Qualification'];
$adhaarno=$row['AdhaarNumber'];
$contactno=$row['ContactNo'];
$email=$row['Email'];
$anotherno=$row['anotherContactNo'];
$emergencyno=$row['EmergencyContact'];
$emergcontactname=$row['EmergContactName'];
$emergcontactrelation=$row['EmergContactRelation'];
$emptype=$row['EmpType'];
$role=$row['Role'];
$doj=$row['DOJ'];
$bankno=$row['BankNO'];
$ifsc=$row['IFSC'];
$password=$row['Password'];
$other1=$row['Other1'];
$other2=$row['Other2'];
$status=$row['Status'];

}

?>


                   
                        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Personal Details</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group " style="padding-left:50px;" >
                                                <label for="file-1"> 
                                                    <input type="text" name="oldimg" value="<?php echo "$img"?>" hidden>
                                                <img height="150px"  width="150px" src="Images/EmpImages/<?php echo "$img";?>" id="uploadPreview-1" alt="" style="border-radius:10px;">
                                                <h4 >&nbsp;&nbsp;&nbsp;Add Image                               
                                                                <input name="image" type="file" id="file-1" hidden accept="image/*" onchange="PreviewImage();"> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                                                      
                                                   <label>Name</label>
                                                   <input type="text" name="eid" value="<?php echo "$id";?> " hidden>
                                                    <input type="text" name="ename" required value="<?php echo "$name";?>" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                     <br>
                                                    <label>Age</label>
                                                    <input type="number"  name="age" required style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here"  value="<?php echo "$age";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                                                      
                                                   <label>Address</label>
                                                <textarea class="form-control" name="address" required rows="5" style="border: 1px solid black;resize:none;" placeholder="Type here"> <?php echo "$address";?></textarea>                                               
                                                </div></div></div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Blood Group</label>
                                                <select  name="BloodGroup" class="form-control" id="exampleFormControlSelect1"  >
                                               <option> <?php echo "$BloodGroup";?></option>
                                                    <option>A+</option>
                                                    <option>A-</option>
                                                    <option>B+</option>
                                                    <option>B-</option>
                                                    <option>O+</option>
                                                    <option>O-</option>
                                                    <option>AB+</option>
                                                    <option>AB-</option>
                                                </select></div>
                                            </div>
                                  
                                
                                            <div class="col-md-6">
                 
                          
                                <label>Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" <?php if($gender=="Male"){?> checked="true"<?php } ?>
                                        id="inlineRadio1" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" <?php if($gender=="Female"){?> checked="true"<?php } ?>
                                        id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                     
                        </div>
                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Qualification</label>
                                                    <input  value="<?php echo "$qualification";?>" required name="qualification" type="text" style="border: 1px solid black;" class="form-control"  placeholder="Type here">
                                                   </div>
                                            </div>                               
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Adhaar Number</label>
                                                <input type="text" pattern="[0-9 ]+"  title="Please enter correct deatils" name="adhaarNumber" required value="<?php echo "$adhaarno";?>"  style="border: 1px solid black;" class="form-control"  placeholder="Type here">
                                                </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       
            </div>
          </div>


<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Details</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input  value="<?php echo "$contactno";?>" required pattern="[6-9]{1}[0-9]{9}" name="mobileNo" type="number" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email"  value="<?php echo "$email";?>" name="email"  required  style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Contact number(optional)</label>
                                                <input type="number" name="optionalmobileNO" pattern="[6-9]{1}[0-9]{9}"  value="<?php echo "$anotherno";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Emergency Contact Number</label>
                                                    <input type="number" name="emergencycontactNO" required  pattern="[6-9]{1}[0-9]{9}" value="<?php echo "$emergencyno";?>" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Emergency Contact Person Name</label>
                                                    <input type="text" name="emergencycontactName" required value="<?php echo "$emergcontactname";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Relation with Emergency Contact Person</label>
                                                    <input type="text" name="emergencycontactRealtion" required value="<?php echo "$emergcontactrelation";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>               
                                        </div>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Employement Details</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="exampleFormControlSelect1">Employement Type</label>
                                                <select name="emptype" class="form-control" id="exampleFormControlSelect1">
                                                    <option> <?php echo "$emptype";?></option>
                                                    <option>Permanent</option>
                                                    <option>Temporary</option>
                                                    <option>Part-Time</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Status</label>
                                                <select name="status" class="form-control" id="exampleFormControlSelect1">
                                                <option> <?php echo "$status";?></option>
                                                 <option>Active</option>
                                                    <option>De-Active</option>                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Role</label>
                                                <input name="role" ype="text" required value="<?php echo "$role";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date of Joining</label>
                                                    <input name="DOJ" type="date" required value="<?php echo "$doj";?>" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bank Account Number</label>
                                                    <input name="BankaccNO" type="number" required value="<?php echo "$bankno";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>IFSC Code</label>
                                                    <input name="IFSC" type="text" required value="<?php echo "$ifsc";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>               
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Password to Login</label>
                                                    <input name="password" type="text"  required value="<?php echo "$password";?>" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Other</label>
                                                    <input name="other1" type="text" value="<?php echo "$other1";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Other</label>
                                                    <input name="other2" type="text" value="<?php echo "$other2";?>" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>               
                                        </div><br>
                                        <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" name="edit-emp" class="btn btn-success">Save Changes</button>
                                            <button type="reset" class="btn btn-dark" onchange="clear_fetch();"; >Reset</button>
                                        </div>
                                    </div>                                            
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</body>

<script type="text/javascript">

function PreviewImage() {
    var oFReader = new FileReader();
  
    oFReader.readAsDataURL(document.getElementById("file-1").files[0]);
  

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview-1").src = oFREvent.target.result;

    };
};


function clear_fetch() {    

$('#fetch_results:input', $(this)).each(function(index) {
  this.value = "";
})

}
</script>
<?php include('footer.php')?>


