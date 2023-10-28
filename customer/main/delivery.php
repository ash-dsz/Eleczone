
<?php include('header.php');?>
<?php include('cnn.php');?>
<?php
error_reporting(0);
$id=$_SESSION['user'];
$sql=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$id'");
$value=mysqli_fetch_array($sql);





?>



<div data-section-id="template--14229811888190__main" data-section-type="product-section">
  <div id="product-section-template--14229811888190__main">
    <div class="product_layout product_view_sticky_left_right">
    <h5></h5> 
     
    
    
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
        <h5 class="mb-0">Delivery Details</h5>
      </div>
      <div class="card-body">
        <form action="finalorder.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="name" value="<?php echo $value['Name']; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" name="userid" value="<?php echo $value['MobileNo']; ?>" pattern="[6-9]{1}[0-9]{9}" id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Contact Number</label>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="email" id="form7Example3" name="email"  value="<?php echo $value['Email']; ?>"  class="form-control" required />
            <label class="form-label" for="form7Example3">Email</label>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form7Example4"  name="address" value="<?php echo $value['Address']; ?>"  class="form-control"  required/>
            <label class="form-label" for="form7Example4">Address</label>
          </div>

          
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example1" class="form-control" name="state" value="<?php echo $value['State']; ?>" required />
                <label class="form-label" for="form7Example1">State</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" class="form-control" name="city" value="<?php echo $value['City']; ?>" required/>
                <label class="form-label" for="form7Example2">City</label>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example1" class="form-control" name="landmark" value="<?php echo $value['Landmark']; ?>" required/>
                <label class="form-label" for="form7Example1">Land Mark</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" class="form-control" name="pincode" value="<?php echo $value['Pincode']; ?>" required/>
                <label class="form-label" for="form7Example2">Pin-Code</label>
              </div>
            </div>
          </div>

          <input type="submit" style="background-color:orange;"  name="delivery" class="form-control" value="Deliver Here">
         
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




























<?php include('footer2.php') ;?>