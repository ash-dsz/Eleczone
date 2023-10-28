<?php include("header.php");?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Service Assignments</h4>
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

                   
          

     

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">My Service Assignments</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $id=$_SESSION['employee'];
                                   $status="Pending";
                                   $empname=mysqli_query($conn,"SELECT * FROM `employee` WHERE `ContactNo`='$id'");
                                   $n=mysqli_fetch_array($empname);
                                   $empname=$n['Name'];
                                   $result=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `Status`='$status' AND `AssignedEmp`='$empname'");
                                    
                                   ?>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Service ID</th>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                                <th>Product</th>
                                                <th>Issue Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Assigned Employee</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                         if(mysqli_num_rows($result)>0){
                                            while($row =mysqli_fetch_assoc($result)){

                                            ?>
                                            <tr>
                                                <td><a href="confirm.php?serviceid=<?php echo $row['Service_ID']  ?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primary-header-modal">Confirm</button></td></a>
                                                <td><?php echo $row['Service_ID'] ?></td>
                                                <td><?php echo $row['Name'] ?></td>
                                                <td><?php echo $row['ContactNo'] ?></td>
                                                <td><?php echo $row['Address'] ?></td>
                                                <td><?php echo $row['ProductName'] ?></td>
                                                <td><?php echo $row['IssueTitle'] ?></td>
                                                <td><?php echo $row['Desciption'] ?></td>
                                                <td><?php echo $row['Status'] ?></td>
                                                <td><?php echo $row['AssignedEmp'] ?></td>
                                            </tr>
                                            <?php
                                            }
                                        }
                                     
                                        ?>
                                    </tbody>
                                    </table>
                                    </form>

                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                    </div>
<?php include('footer.php')?>



