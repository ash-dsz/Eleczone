<?php include('header.php')?>

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Manage My Products</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Manage Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-primary">
                                                <h4 class="modal-title" id="primary-header-modalLabel">Edit My Products
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>

                                            <form action="product-edit.php" method="post">
                                            <div class="modal-body">
                                                <h5 class="mt-0">Select Product ID to edit</h5>
                                                <select  name="pid" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `products`");
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>
                                             <option><?php echo $row["Product_ID"];?></option>
                                            <?php
                                               }
                                          ?>
                                             </select><br><div class="space" style="padding-left:150px;">
                                            <input type="submit" class="btn btn-primary" name="product-edit" value="Edit This Product"></div>
                                            
                                            

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                             
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                            </form>              
                             <form action="formController.php" method="post">
                    <div id="danger-header-modals" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="danger-header-modalsLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="danger-header-modalsLabel">Removing Category</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Delete category</h5>
                                                <select  name="rmvcat" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `category`");
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>
                                             <option><?php echo $row["CategoryName"];?></option>
                                            <?php
                                               }
                                                   ?>
                                             </select><br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn-delcat" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                             
                                <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-success">
                                                <h4 class="modal-title" id="success-header-modalLabel">Activate/De-Activate Product
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Change Status of Product</h5>
                                                <h5></h5>
                          
                               
                                    <div class="form-group">
                                          <h4 class="card-title">Choose Product ID to change Status</h4>
                                        <select  name="name" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">

                                                   <?php
                                                    include "cnn.php";
                                                    $result=mysqli_query($conn,"SELECT * FROM `products`");
                                                    while($row=mysqli_fetch_array($result)){                                                  
                                                    ?>
                                            <option><?php echo $row["Product_ID"];?></option>
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
                                                <button type="submit" name="product-status" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>


                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-danger">
                                                <h4 class="modal-title" id="danger-header-modalLabel">Removing product</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0">Delete Product</h5><h6>(This will permanently delete the data)</h6>
                                                <h5>Name of the Product</h5>
                                                <select name="pname"  style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1">
                                            <?php
                                              include "cnn.php";
                                            $result=mysqli_query($conn,"SELECT * FROM `products`");
                                             while($row=mysqli_fetch_array($result)){                                                  
                                            ?>
                                             <option><?php echo $row["ProductName"];?></option>

                                            <?php
                                               }
                                                   ?>
                                             </select>
                                        

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" name="product-delete" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                             

                                <div class="btn-list" style="padding-left:0px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primary-header-modal">Edit Product</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#danger-header-modals">Remove Category</button>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#success-header-modal">Status</button>

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
                                <h4 class="card-title">My Products</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $result=mysqli_query($conn,"SELECT * FROM `products`");
                                    
                                   ?>
                                    <table id="zero_config" class="table table-striped table-bordered wrap">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th >Name</th>
                                               
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Image 1</th>
                                                <th>Image 2</th>
                                                <th>Image 3</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                                <th>Brand</th>
                                                <th>Manufacturer Address</th>
                                                <th>Price</th>
                                                <th>Compare Price</th>
                                                <th>Cost per Item</th>
                       
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         if(mysqli_num_rows($result)>0){
                                            while($row =mysqli_fetch_assoc($result)){

                                            ?>
                                            <tr>
                                                <td><?php echo $row['Product_ID'] ?></td>
                                                <td><?php echo $row['ProductName'] ?></td>
                                                
                                                <td><?php echo $row['Category'] ?></td>
                                                <td><?php echo $row['Status'] ?></td>                                              
                                                <td><img src="<?php echo "Images/ProductImages/". $row['Image1'];?>" width="100px" height="100px" alt="image"></td>
                                                <td><img src="<?php echo "Images/ProductImages/". $row['Image2'];?>" width="100px" height="100px" alt="image"></td>
                                                <td><img src="<?php echo "Images/ProductImages/". $row['Image3'];?>" width="100px" height="100px" alt="image"></td>
                                                <td><?php echo $row['Color'] ?></td>
                                                <td><?php echo $row['Size'] ?></td>
                                                <td><?php echo $row['Brand'] ?></td>
                                                <td><?php echo $row['Manufacture_add'] ?></td>
                                                <td><?php echo $row['Price'] ?></td>
                                                <td><?php echo $row['ComparePrice'] ?></td>
                                                <td><?php echo $row['CostPerItem'] ?></td>
                                      
                                                <td>  
                                                     <input type="text" value="<?php echo $row['Product_ID'] ?> " name="rmvproduct" hidden >
                                                     <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#danger-header-modal">Delete</button>

                                                </td>
                                                
                                            </tr>
                                        
                                            <?php
                                            }
                                        }
                                        else{
                                            echo "<script>alert('NO records Found');window.location.href='add-product.php';</script>";

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

