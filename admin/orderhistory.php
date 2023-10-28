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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Admin!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item">Order History
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order History</h4>
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


                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                            include('cnn.php');
                            $status="Delivered";
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
                                               
                                                <button class="btn btn-primary mt-3" onclick='updatecust1(<?php echo $invoice_no; ?>)'>
                                                 <i class="icon ion-edit"></i>product Invoice</button> </td>
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
  function updatecust1(rnum)
                        {
                           
                               window.open("../customer/main/service.php?id="+rnum,"");
                           
                        }
                        
                            </script>
<?php include('footer.php')?>

