<?php include("header.php");?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Service Feedbacks</h4>
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
                                <h4 class="card-title">Service feedbacks</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $status="Completed";
                                   $result=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `Status`='$status' ");
                                    
                                   ?>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Service ID</th>
                                                <th>Customer Name</th>
                                                <th>Contact Number</th>
                                                <th>Issue Title</th>
                                                <th>Assigned Employee</th>
                                                <th>Rate</th>
                                                <th>Feedbacks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                         if(mysqli_num_rows($result)>0){
                                            while($row =mysqli_fetch_assoc($result)){
                                                $serviceid=$row['Service_ID'];
                                                $result2=mysqli_query($conn,"SELECT * FROM `feedback` WHERE `Service_ID`='$serviceid'");
                                                $row2=mysqli_fetch_assoc($result2);

                                            ?>
                                            <tr>
                                                <td><?php echo $row['Service_ID'] ?></td>
                                                <td><?php echo $row['Name'] ?></td>
                                                <td><?php echo $row['ContactNo'] ?></td>
                                                <td><?php echo $row['ProductName'] ?>,<?php echo $row['IssueTitle'] ?></td>
                                                <td><?php echo $row['AssignedEmp'] ?></td>
                                                <td><?php echo $row2['Rate'] ?></td>
                                                <td><?php echo $row2['Comments'] ?></td>
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



