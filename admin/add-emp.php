<?php include('header.php')?>

<form action="formController.php" method="post" enctype="multipart/form-data">

        <div class="page-wrapper">
       
            <!-- ===================================s`````+-=========================== -->
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
                                                <img height="150px"  width="150px" src="assets/images/add-image.png" id="uploadPreview-1" alt="" style="border-radius:10px;">
                                                <h4 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Image</h4>                                        
                                                                <input name="image" type="file" id="file-1" hidden accept="image/*" onchange="PreviewImage();"> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                                                      
                                                   <label>Name</label>
                                                    <input type="text" required name="ename" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                     <br>
                                                    <label>Age</label>
                                                    <input type="number" required name="age" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">                                                      
                                                   <label>Address</label>
                                                <textarea class="form-control" required name="address" rows="5" style="border: 1px solid black;resize:none;" placeholder="Type here"></textarea>                                               
                                                </div></div></div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Blood Group</label>
                                                <select  name="BloodGroup" class="form-control" id="exampleFormControlSelect1">
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
                                  
                                
                                <div class="col-md-4">
                                <div class="form-group">
                               <label> Gender</label><br>
                               <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="gender" type="radio"  id="inlineRadio1" value="Male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="gender" type="radio"  id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                    
                   
             
                                                
                                            </div>
                                                </div>
                                            </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Qualification</label>
                                                    <input  name="qualification"  type="text" style="border: 1px solid black;" class="form-control"  placeholder="Type here">
                                                   </div>
                                            </div>                               
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Adhaar Number</label>
                                                <input type="text" pattern="[0-9 ]+"  title="Please enter correct deatils" name="adhaarNumber"  style="border: 1px solid black;" class="form-control"  placeholder="Type here">
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
                                                    <input name="number" type="text" style="border: 1px solid black;" pattern="[6-9]{1}[0-9]{9}"  size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" required   style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Contact number(optional)</label>
                                                <input type="number" name="optionalmobileNO" style="border: 1px solid black;" pattern="[6-9]{1}[0-9]{9}" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Emergency Contact Number</label>
                                                    <input type="number" name="emergencycontactNO" style="border: 1px solid black;" pattern="[6-9]{1}[0-9]{9}"  size="50" class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Emergency Contact Person Name</label>
                                                    <input type="text" name="emergencycontactName" style="border: 1px solid black;"   class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Relation with Emergency Contact Person</label>
                                                    <input type="text" name="emergencycontactRealtion" style="border: 1px solid black;"   class="form-control"  placeholder="Type here">
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
                                                    <option>Active</option>
                                                    <option>De-Active</option>                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label>Role</label>
                                                <input name="role" ype="text" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date of Joining</label>
                                                    <input name="DOJ" type="date" style="border: 1px solid black;" size="50"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Bank Account Number</label>
                                                    <input name="BankaccNO"  type="number" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>IFSC Code</label>
                                                    <input name="IFSC" type="text" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>               
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Password to Login</label>
                                                    <input name="password" type="text" style="border: 1px solid black;" size="50"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Other</label>
                                                    <input name="other1" type="text" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Other</label>
                                                    <input name="other2" type="text" style="border: 1px solid black;"  class="form-control"  placeholder="Type here">
                                                </div>
                                            </div>               
                                        </div><br>
                                        <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" name="add-emp" class="btn btn-info">Submit</button>
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
