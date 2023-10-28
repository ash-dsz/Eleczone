<?php include("header.php");?>
<?php include("cnn.php");?>

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">My Feedbacks</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Feedbacks</li>
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
                                <h4 class="card-title">Feedbacks</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                               
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Service ID</th>
                                                <th>Issue Title</th>
                                                <th>Rating</th>
                                                <th>Feedback</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                       $id=$_SESSION['employee'];
                                       $myemp=mysqli_query($conn,"SELECT * FROM `employee` WHERE `ContactNo`='$id'");
                                       $emp=mysqli_fetch_array($myemp);
                                       $empname=$emp['Name'];
                                       $status="Completed";
                                       $result=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `Status`='$status' AND `AssignedEmp`='$empname'");
                                          
                                            while($row=mysqli_fetch_array($result)){
                                                $serviceid=$row['Service_ID'];
                                                $select=mysqli_query($conn,"SELECT * FROM `feedback` WHERE `Service_ID`='$serviceid' ORDER BY `Service_ID` DESC");
                                                $service=mysqli_fetch_array($select);

                                            ?>
                                            <tr>
                                                <td><?php echo $row['Service_ID'] ?></td>
                                                <td><?php echo $row['ProductName'] ?>,<?php echo $row['IssueTitle'] ?></td>
                                                <td><?php echo $service['Rate'] ?></td>
                                                <td><?php echo $service['Comments'] ?></td>

                                            </tr>
                                            <?php
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





