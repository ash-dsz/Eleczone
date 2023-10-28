<?php include("header.php");?>
<form action="formController.php" method="post">
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">My Customers</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Manage Customers</li>
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
                                <h4 class="card-title">My Customers</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $result=mysqli_query($conn,"SELECT * FROM `customer`");
                                    
                                   ?>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>Name</th>
                                                <th>ContactNumber</th>
                                                <th>E-mail</th>
                                                <th>Address</th>
                                                <th>pincode</th>
                                                <th>city</th>
                                                <th>State</th>
                                                <th>Landmark</th>





                                             

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         if(mysqli_num_rows($result)>0){
                                            while($row =mysqli_fetch_assoc($result)){

                                            ?>
                                            <tr>
                                                <td><?php echo $row['customer_ID'] ?></td>
                                                <td><?php echo $row['Name'] ?></td>
                                                <td><?php echo $row['MobileNo'] ?></td>
                                                <td><?php echo $row['Email'] ?></td>
                                                <td><?php echo $row['Address'] ?></td>
                                                <td><?php echo $row['Pincode'] ?></td>
                                                <td><?php echo $row['City'] ?></td>
                                                <td><?php echo $row['State'] ?></td>
                                                <td><?php echo $row['Landmark'] ?></td>

                                                <!-- <td>  
                                                     <input type="text" value="<?php echo $row['customer_ID']?>" name="" hidden >
                                                     <button type="button" name="" class="btn btn-danger" data-toggle="modal" data-target="#danger-header-modal">Delete</button>

                                                </td> -->
                                                
                                            </tr>
                                        
                                            <?php
                                            }
                                        }
                                       
                                        ?>
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                    </div>
<?php include('footer.php')?>



