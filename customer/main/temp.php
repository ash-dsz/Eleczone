<?php 


  include('header.php');
  if(isset($_SESSION['user'])){
  ?>

<h5></h5>




<?php
//pending service display to customer assigned employee
$invoice=$_GET['invoice'];
$id=$_SESSION['user'];
$status="Pending";
$sql=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `ContactNo`='$id' AND Status='$status'");
if(mysqli_num_rows($sql)>0){
while($value=mysqli_fetch_array($sql)){


  $empname=$value['AssignedEmp'];
  $qry=mysqli_query($conn,"SELECT * FROM `employee` WHERE `name`='$empname'");
  $fetch=mysqli_fetch_array($qry);

?>
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
       
              <div class="row">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Employee Assigned For Service</h5>
      </div>
      
      <div class="card-body">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-2">
            <div class="col">
              <div class="form-outline">
              <img style="margin-left:65px;" src="<?php echo "../../admin/Images/EmpImages/".$fetch['Image'];?>" width="200px" height="200px" alt="image">
              <h5></h5> 
                <input type="text" name="name" readonly value="<?php echo $empname; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">First name</label>
         
              <div class="form-outline">
                <input type="text" name="number" readonly value="<?php echo $fetch['ContactNo']; ?>"  id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Contact Number</label>
              </div>
              <div class="form-outline">
                <input type="text" name="number" readonly value="<?php echo $value['ProductName']; ?>,<?php echo $value['IssueTitle']; ?>"  id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Issue Title</label>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
 </div>
</div>
  </div>
</div> 
</div></div> 
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

?>





<?php

//let user confirm service

$id=$_SESSION['user'];
$status="Confirm";
$sql=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `ContactNo`='$id' AND Status='$status'");
if(mysqli_num_rows($sql)>0){
while($value=mysqli_fetch_array($sql)){





?>
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
       

      



              <div class="row">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Requested Services</h5>
      </div>
      <div class="card-body">
        <form action="servicereview.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="name" readonly value="<?php echo $value['Name']; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" value="<?php echo $value['Service_ID']; ?>" hidden name="serviceid">
                <input type="text" name="number" readonly value="<?php echo $value['ContactNo']; ?>"  id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Contact Number</label>
              </div>
            </div>
          </div>

    
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="name" readonly value="<?php echo $value['ProductName']; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">Product Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" name="number" readonly value="<?php echo $value['IssueTitle']; ?>"  id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Issue Title</label>
              </div>
            </div>
          </div>


          

          <input type="submit" style="background-color:orange;"  name="confirm" class="form-control" value="Verify Service">
         
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

?>






<?php
//requested service display to customer

     
$status="New";
$sql=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `ContactNo`='$id' AND Status='$status'");
if(mysqli_num_rows($sql)>0){
$details=mysqli_fetch_array($sql);



        $id=$_GET['invoice'];       
        $new=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `InvoiceNo`='$id'");
         $row=mysqli_fetch_array($new);
         $pid=$row['Product_ID'];
         $product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
         $value=mysqli_fetch_array($product);


 ?>

 <div id="main-block-1602925357492" class="main-section-one main_section main_section_1602925357492"
   style="margin-top: 40px;margin-bottom: -4px;padding: ;">
    <div class="container" >
      <div class="row">
        
  


      
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Service Request</h5>
      </div>
      
      <div class="card-body">


          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
              <img class=""
                           data-src="<?php echo "../../admin/Images/ProductImages/". $value['Image1'];?>" alt="image" src="<?php echo "../../admin/Images/ProductImages/". $imgs['Image1'];?>">
              </div>
            </div>
            
            <div class="col">
                <h5></h5>
              <div class="form-outline">
          
                <input type="text" readonly name="userid" value="<?php echo $value['ProductName'];?>"  id="form7Example2" class="form-control" />
                <label class="form-label" for="form7Example2">Product Name</label>
              </div>
              <h5></h5>
              
              <div class="form-outline mb-4">
            <input type="text" id="form7Example3" readonly name=""  value="<?php echo $details['InvoiceNo']; ?>"  class="form-control" />
            
            <label class="form-label" for="form7Example3">Invoice NO</label>
          </div>
            </div>

          </div>

         
                <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example1" readonly class="form-control"  value="<?php echo $details['IssueTitle']; ?>"  />
                <label class="form-label" for="form7Example1">Issue title</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $details['Address']; ?>" />
                <label class="form-label" for="form7Example2">Address</label>
              </div>
            </div>
   </div>

   <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $details['Desciption']; ?>" />
                <label class="form-label" for="form7Example2">Description</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="" value="<?php echo $details['orderdate']; ?>" />
                <label class="form-label" for="form7Example2">Order Date</label>
              </div>
            </div>
            </div>



         
            <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <form action="functions.php" method="post">
                    <input type="text" name="invoice" value="<?php echo $details['InvoiceNo']; ?>" hidden>
              <input type="submit" name="cancel-service" value="Cancel Service" class="btn btn-primary">

</form>
           
              </div>
            </div>
            
</div>








            
          </div>

          
     

         
          </div>
    </div>
  </div>
  </div>
    </div>
  </div>
  </div>
    </div>
  </div>
  </div>
    </div>
  </div>
        </div>



                  </div></div></div>
                </div</div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php

}

else
{
  
?>

    

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
              <textarea class="form-control" name="address" required> </textarea>
              <label class="form-label" for="form7Example1">Address</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form7Example2" class="form-control" name="productname" value="" required/>
              <label class="form-label" for="form7Example2">Product Name(With Brand)</label>
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


?>







<?php
  }

  else{
    echo "<script>window.location.href='../../test2.php';</script>";
} 
include('footer2.php');
 ?> 