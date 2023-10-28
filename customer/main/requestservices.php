<?php 
  include('header.php');
  include('cnn.php');
  $invoice=$_GET['invoice'];
  if(isset($_SESSION['user'])){
 


$invoice=$_GET['invoice'];
$id=$_SESSION['user'];
$status1="New";
$status2="Pending";
$status3="Confirm";
$check=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE  `InvoiceNo`='$invoice' AND `ContactNo`='$id' AND `Status`='$status1' OR `Status`='$status2' OR `Status`='$status3'");
if(mysqli_num_rows($check)>0){
    echo "<script>window.location.href='requestservice.php?invoice=$invoice';</script>";

}
else{

  
?>

<h5></h5>

<div data-section-id="template--14229811888190__main" data-section-type="product-section">
<div id="product-section-template--14229811888190__main">
  <div class="product_layout product_view_sticky_left_right">
  
   
  
  
  <div class="product-main">
    <div class="container-fluid no-padding">
      <div class="box_product_page">
        <div class="row">
          <div class="col-lg-12"><div class="product-view product-page-area">
<div class="product-essential">
  <div class="container">
    <div class="product-summary-before">
     

    <?php

$sql=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$id'");
$value=mysqli_fetch_array($sql);


?>



            <div class="row">
  <div class="card mb-4">
    <div class="card-header py-3">
      <h5 class="mb-0">Request Service</h5>
    </div>
    <div class="card-body">
      <form action="controls.php" method="post">
   
        <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
              <input type="text"  name="invoiceno" value="<?php echo $invoice; ?>" id="form7Example1" class="form-control" required  readonly/>
              <label class="form-label" for="form7Example1">Invoice No</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text"  name="name" readonly value="<?php echo $value['Name']; ?>" id="form7Example1" class="form-control" required  />
              <label class="form-label" for="form7Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" name="number" value="<?php echo $id; ?>" readonly id="form7Example2" class="form-control" required />
              <label class="form-label" for="form7Example2">Contact Number</label>
            </div>
          </div>
        </div>

  
        <!-- Text input -->
       
        
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <textarea required class="form-control" name="address" required> </textarea>
              <label class="form-label" for="form7Example1">Address</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <?php
              $product=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `InvoiceNo`='$invoice'");
              $fetchproduct=mysqli_fetch_array($product);
              $pid=$fetchproduct['Product_ID'];

              $product1=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
              $fetchproduct1=mysqli_fetch_array($product1);
              $pname=$fetchproduct1['ProductName'];




?>
              <input type="text" id="form7Example2" class="form-control" readonly name="productname" value="<?php echo $pname; ?>" required/>
              <label class="form-label" for="form7Example2">Product Name</label>
            </div>
          <h5></h5>
            <div class="form-outline">
              <input type="text" id="form7Example2" class="form-control" name="issuetitle" value="" required/>
              <label class="form-label" for="form7Example2">Issue Title</label>
            </div>
          </div>
        </div>


        <div class="form-outline mb-4">
         <textarea class="form-control"  name="description" required></textarea>
          <label class="form-label" for="form7Example4">Problem Description</label>
        </div>

        

        <input type="submit" style="background-color:orange;"  name="service-request" class="form-control" value="Submit Request">
       
      </form>
    </div>
  </div>
</div>



  
</div>

</div>
</div>

</div> 
          </div></div> 

                  <!-- Post meta after content --> 
                  <div class="clearfix"></div>
                </div> 
              </div></div>
</div><!-- END content_for_index -->
        </div>
      </div>
    </div>

                </div></div></div>
              </div></form></div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>








<?php
} 
}
else
{
    echo "<script>window.location.href='servicelog/test2.php?id=$invoice';</script>";
} 
include('footer2.php');
 ?> 