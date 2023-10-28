<?php include("header.php");?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Product feedbacks</h4>
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
                                <h4 class="card-title">Customer feedbacks for products</h4>
                                <h6 class="card-subtitle">...</a></h6>
                                <div class="table-responsive">
                                   <?php
                                   include "cnn.php";
                                   $type="Product";
                                   $result=mysqli_query($conn,"SELECT * FROM `feedback` WHERE `ReviewType`='$type' ORDER BY `F_ID` DESC");
                                    
                                   ?>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Product_ID</th>
                                                <th>Product Name</th>
                                                <th>Rate</th>
                                                <th>Feedbacks</th>
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
                                                <td><?php echo $row['Rate'] ?></td>
                                                <td><?php echo $row['Comments'] ?></td>
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



