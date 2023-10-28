<?php include('header.php')?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb" style="padding-right:0px;">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Manage Employees</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Manage Employee</li>
                                </ol>
                            </nav> 
                        </div>
                       
                    </div>
                    <form action="emp-edit.php" method="post">
                    <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-primary">
                                                <h4 class="modal-title" id="primary-header-modalLabel">Edit My Employee
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Edit Selected Employee</h5>
                                                
                                                <select  name="eid" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `employee`");
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>
                                             <option><?php echo $row["Emp_ID"];?></option>
                                            <?php
                                               }
                                          ?>
                                             </select><br><div class="space" style="padding-left:150px;">
                                            <input type="submit" class="btn btn-primary" name="emp-edit" value="Edit This Employee"></div>
                                            
                                            

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                             
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                            </form>    
                                           
                                            <form action="formController.php" method="post">
                                <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-success">
                                                <h4 class="modal-title" id="success-header-modalLabel">Activate/De-Activate your employee
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Change Status of Employee</h5>
                                                <h5></h5>
                                <h4 class="card-title">Select the Employee</h4>
                                
                                    <div class="form-group">
                                        <select  name="name" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">

                                                   <?php
                                                    include "cnn.php";
                                                    $result=mysqli_query($conn,"SELECT * FROM `employee`");
                                                    while($row=mysqli_fetch_array($result)){                                                  
                                                    ?>
                                            <option><?php echo $row["Name"];?></option>
                                          <?php
                                                    }
                                                    ?>
                                        </select>

                                       
                                                    <h5></h5>
                                                    <label for="exampleFormControlSelect1">Status</label>
                                                <select name="status" class="form-control" id="exampleFormControlSelect1">
                                                    <option>De-Active</option>                                                    
                                                    <option>Active</option>
                                                </select>
                                            
                                    </div>

                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn-status" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                
                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="danger-header-modalLabel">Removing Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Delete Employee</h5><h6>(This will permanently delete the data)</h6>
                                                <h5>Name of the Employee</h5>
                                                
                                                <select name="empname" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `employee`");
                                           
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>
                                             <option><?php echo $row["Name"];?></option>

                                            <?php
                                               }
                                                   ?>
                                             </select>
                                         

                                            </div>
                                           
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" name="employee-delete" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                             
                               

                                <div class="btn-list" style="padding-left:120px;">
                                    <!-- Primary header modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#primary-header-modal">Edit My Employee</button>
                                  
                                    <!-- Success header modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#success-header-modal">Access Control</button>
                                    
                                </div>           
</div>


</div>  


                    
                    
           
                    
  
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">My Employees</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $result=mysqli_query($conn,"SELECT * FROM `employee`");
                                    
                                   ?>
                                   
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Status</th>
                                                <th>Address</th>
                                                <th>BloodGroup</th>
                                                <th>Gender</th>
                                                <th>Qualification</th>
                                                <th>Adhaar Number</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Second Contact Number</th>
                                                <th>Emergency Contact Number</th>
                                                <th>Emergency Contact Name</th>
                                                <th>Emergency Contact Relation</th>
                                                <th>Employee Type</th>
                                                <th>Role</th>
                                                <th>Date of Joining</th>
                                                <th>BankAccount Number</th>
                                                <th>IFSC</th>
                                                <th>Password</th>
                                                <th>Other1</th>
                                                <th>Other2</th>
                                                <!-- <th>Delete</th> -->
                                               
                                      



                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         if(mysqli_num_rows($result)>0){
                                            while($row =mysqli_fetch_assoc($result)){
                                               
                                            ?>
                                          
                                            <tr>
                                                <td><?php echo $row['Emp_ID'] ?></td>
                                                <td><img src="<?php echo "Images/EmpImages/". $row['Image'];?>" width="100px" height="100px" alt="image"></td>
                                                <td><?php echo $row['Name'] ?></td>
                                                <td><?php echo $row['Age'] ?></td>
                                                <td><?php echo $row['Status'] ?></td>
                                                <td><?php echo $row['Address'] ?></td>
                                                <td><?php echo $row['BloodGroup'] ?></td>
                                                <td><?php echo $row['Gender'] ?></td>
                                                <td><?php echo $row['Qualification'] ?></td>
                                                <td><?php echo $row['AdhaarNumber'] ?></td>
                                                <td><?php echo $row['ContactNo'] ?></td>
                                                <td><?php echo $row['Email'] ?></td>
                                                <td><?php echo $row['anotherContactNo'] ?></td>
                                                <td><?php echo $row['EmergencyContact'] ?></td>
                                                <td><?php echo $row['EmergContactName'] ?></td>
                                                <td><?php echo $row['EmergContactRelation'] ?></td>
                                                <td><?php echo $row['EmpType'] ?></td>
                                                <td><?php echo $row['Role'] ?></td>
                                                <td><?php echo $row['DOJ'] ?></td>
                                                <td><?php echo $row['BankNO'] ?></td>
                                                <td><?php echo $row['IFSC'] ?></td>
                                                <td><?php echo $row['Password'] ?></td>
                                                <td><?php echo $row['Other1'] ?></td>
                                                <td><?php echo $row['Other2'] ?></td>
                                                <!-- <td>  
                                                     <input type="text" value="<?php echo $row['Emp_ID']?>" name="rmvemp" hidden >
                                                     <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#danger-header-modal">Delete</button>

                                                </td> -->
                                            </tr>
                                        
                                            <?php
                                            }
                                        }
                                        else{
                                            echo "<script>alert('NO records Found');window.location.href='add-emp.php';</script>";

                                        }
                                        ?>
                                    </tbody>
                                    </table>
                                    
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                    </div>
                                    
<?php include('footer.php')?>