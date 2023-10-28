<?php include('header.php')?>
<?php include('cnn.php')?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hello Admin!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                
                <?php
                 $status="New";
                   $sql=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `Status`='$status'");
                   $no=mysqli_num_rows($sql);
                   ?>
                <div class="card-group">
                <div class="card">
                    <a href="#">
                        <div class="card-body" style="">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium"><?php echo"$no"; ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Orders</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="shopping-cart"></i></span>
                                </div>
                            </div>
                        </div>
                    </div></a>

                   <?php
                   $sql=mysqli_query($conn,"SELECT * FROM `customer`");
                   $no=mysqli_num_rows($sql);
                   ?>
                    <div class="card border-right"> <a href="mycustomer.php">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo"$no"; ?></h2>
                                       
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">My Total Customers</h6>
                                </div>
                                <div class="ml-auto mt-md-1 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="users"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                        </a>
                      
                    <?php
                    $sql=mysqli_query($conn,"SELECT * FROM `products`");
                    $no=mysqli_num_rows($sql);
                    ?>
                    <div class="card border-right" >  <a href="mng-product.php">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller"></sup><?php echo"$no"; ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">My Total Products
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="server"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php
                    $status="New";
                    $sql=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `Status`='$status'");
                    $no=mysqli_num_rows($sql);
                    ?>               
                    <div class="card border-right">  <a href="servicerequests.php">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?php echo"$no"; ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Requests For Service</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user-check"></i></span>
                                </div>
                            </div>
                        </div>
</a>
</div></div>


                 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">My Orders</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                               
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Order ID</th>
                                                <th>Invoice No</th>
                                                <th>Product ID</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Image</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Brand</th>
                                                <th>Amount Paid</th>
                                                <th>Name</th>
                                                <th>Contact NO </th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Order Date</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                            include('cnn.php');
                            $status="New";
                            $neworder=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `Status`='$status' ORDER BY `Order_ID` ASC ");
                            while($rows=mysqli_fetch_array($neworder)){
                           $customer_id=$rows['Customer_ID']; 
                            $product_id=$rows['Product_ID'];
                            $qty=$rows['Qty'];
                            $result=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID` = '$product_id'");
                             $row=mysqli_fetch_array($result);
                             
                                  
                             $result1=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo` = '$customer_id'");
                             $row1=mysqli_fetch_array($result1);
                             

                             $invoice_no=$rows['InvoiceNo'];
                        
                            ?>
                                        <?php
                                                       
                                            ?>
                                            <tr>
                                                
                                                <td>
                                               
                                                    <button class="btn btn-primary mt-3" onclick='updatecust(<?php echo $invoice_no; ?>)'>
                                                <i class="icon ion-edit"></i>Generate QR Code!</button></td>
                                                <td><?php echo $rows['Order_ID'] ?></td>
                                                <td><?php echo $rows['InvoiceNo'] ?></td>
                                                <td><?php echo $row['Product_ID'] ?></td>
                                                <td><?php echo $row['ProductName'] ?></td>
                                                <td><?php echo $rows['Qty'] ?></td>                                     
                                                <td><img src="<?php echo "Images/ProductImages/". $row['Image1'];?>" width="100px" height="100px" alt="image"></td>
                                                <td><?php echo $row['Color'] ?></td>
                                                <td><?php echo $row['Size'] ?></td>
                                                <td><?php echo $row['Brand'] ?></td>
                                                <td><?php echo $rows['Price'] ?></td>
                                                <td><?php echo $row1['Name'] ?></td>
                                                <td><?php echo $row1['MobileNo'] ?></td>
                                                <td><?php echo $row1['Email'] ?></td>
                                                <td><?php echo $rows['Address'] ?></td>
                                                <td><?php echo $rows['orderdate'] ?></td>
                                                <td><a href="formController.php?id=<?php echo $invoice_no;  ?>"><input type="submit" value="Update" class="btn btn-success"></a></td>


                                                
                                                
                                            </tr>
                                        
                                            <?php
                                             
                                      
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

<script type="text/javascript">
 function updatecust(rnum)
                        {
                           var con=confirm("Press Enter to Generate QR Code!");
                            if(con==true)
                            {
                               window.open("GenerateQR.php?id="+rnum,"");
                            }
                        }
                        
                            </script>
<?php include('footer.php')?>

