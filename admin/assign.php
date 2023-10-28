<?php include("header.php");?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Service requests</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                                  
                                        
                    </div>
                    </div>

                   
   <?php
    $serviceid=$_GET['serviceid'];
     ?>       

     

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
           
                                            
                                            <div class="modal-body">
        
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `employee` WHERE `Status`='Active'");
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>                                        
                    <form action="formController.php" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Employee Details</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group" >
                                                <label for="file-1">
                                                <img height="150px"  width="150px" src="<?php echo "Images/EmpImages/". $row['Image'];?>" id="uploadPreview-1" alt="" style="border-radius:10px;">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group"  style="padding-left:50px;">                                                      
                                                   <label>Name</label>
                                                    <input type="text" name="ename" readonly style="border: 1px solid black;"  class="form-control" value="<?php echo $row['Name']; ?>">
                                                    <input type="text" name="serviceid" hidden value="<?php echo $serviceid; ?>">

                                                    <h5></h5>
                                                    <label>Contact NO</label>
                                                    <input type="text"  readonly name="age" style="border: 1px solid black;"  class="form-control"  value="<?php echo $row['ContactNo']; ?>">
                                                    <h5></h5>
                                                    <input type="submit" style="margin-left:35px;" class="btn btn-primary" name="assign" value="Assign">
                                                </div></form>
                                            </div>  </div>
                                           
                                            </div>  </div>
                            
                                            </div>
                                            <?php
                                               }
                                          ?>
                                           <br>
                                            
                                             <div class="space" style="padding-left:150px;">
                                            </div>
                                        
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
<?php include('footer.php')?>



