<?php
  include('header.php');
if(isset($_POST['delivery'])){
 include('cnn.php');
 error_reporting(0);
        $name=$_POST['name'];
        $userid=$_POST['userid'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $landmark=$_POST['landmark'];
        $newpincode=$_POST['pincode'];

     
        
    $sessionid=$_SESSION['user'];
       
        $sql=mysqli_query($conn,"UPDATE `customer` SET  `Address`='$address',`State`='$state',`City`='$city',`Landmark`='$landmark',`Pincode`='$newpincode' WHERE `MobileNo` = '$sessionid'");
        

        if($sql){
           
            
        
    
            ?>




        
<div id="main-block-1602925357492" class="main-section-one main_section main_section_1602925357492"
   style="margin-top: 40px;margin-bottom: -4px;padding: ;">
 <?php

 $result=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$sessionid'");
   while($fetch=mysqli_fetch_array($result)){
         $id=$fetch['Product_ID'];
         $new=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$id'");
         $value=mysqli_fetch_array($new);
         $price=$fetch['TotalPrice'];
         $total+=$price;

 ?>
    <div class="container" >
      <div class="row">
        
  


      
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Order Summary</h5>
      </div>
      
      <div class="card-body">

 <form action="payment.php" method="post">
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
            <input type="text" id="form7Example3" readonly name="email"  value="<?php echo $value['Brand']; ?>"  class="form-control" />
            
            <label class="form-label" for="form7Example3">Brand</label>
          </div>
            </div>

          </div>

         
                <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example1" readonly class="form-control" name="state" value="<?php echo $value['Price']; ?>"  />
                <label class="form-label" for="form7Example1">Price</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $value['Color']; ?>" />
                <label class="form-label" for="form7Example2">Color</label>
              </div>
            </div>
   </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $value['Size']; ?>" />
                <label class="form-label" for="form7Example2">Size</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $fetch['qty']; ?>" />
                <label class="form-label" for="form7Example2">Quantity</label>
              </div>
            </div>
            
          </div>

          
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form7Example1">Delivery Address</label>
                <textarea readonly name="fulladdress" ><?php echo $name ?>,<?php echo $email ?>,<?php echo $address ?>,<?php echo $state ?>,<?php echo $city ?>,<?php echo $landmark ?>,<?php echo $newpincode ?>,<?php echo $userid ?></textarea>
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

<?php
    }
?>

<div class="btn" class="" style="">
<label>Total Amount Payable:&nbsp;&#x20B9;<?php echo "$total"; ?></label></div>
<div class="btn" class="btn btn-primary">
      
          <input type="submit" style="background-color:orange;margin-left:95px;"  name="pay" class="form-control" value="Proceed">
          </div>
<?php
include('footer2.php');
            }
            else{
                echo "Unknown error occured";
            }
    

        }


?>
                  </div></div></div>
                </div></form></div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 