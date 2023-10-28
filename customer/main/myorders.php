<?php include('header.php'); ?>
<?php
    if(!isset($_SESSION['user']))
    {
    
      echo "<script>window.location.href='../../test2.php';</script>";
    }


 $sessionid=$_SESSION['user'];
 $status="New";
$results=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `Customer_ID`='$sessionid' AND `Status`='$status'");
if(mysqli_num_rows($results)>0){
?>

        
<div id="main-block-1602925357492" class="main-section-one main_section main_section_1602925357492" style="margin-top: 40px;margin-bottom: -4px;padding: ;">
 <?php
 $status="New";
 $result=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `Customer_ID`='$sessionid' AND `Status`='$status'");
 
   while($fetch=mysqli_fetch_array($result)){
         $id=$fetch['Product_ID'];
         $orderid=$fetch['Order_ID'];
         $new=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$id'");
         $value=mysqli_fetch_array($new);
        
      

 ?>
    <div class="container" >
      <div class="row">
        
  


      
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Order Summary</h5>
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
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $fetch['Qty']; ?>" />
                <label class="form-label" for="form7Example2">Quantity</label>
              </div>
            </div>
            
          </div>

          
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form7Example1">Delivery Address</label>
                <textarea readonly name="fulladdress" ><?php echo $fetch['Address']; ?>
             
            </textarea>
              </div>
            </div>
            <a href="functions.php?orderid=<?php echo $orderid; ?>" ><button type="submit" value="Cancel Order">Cancel Order</button> </a>       

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
}
else
{
  ?>
 
 <h5></h5> 
<div class="container"> 
 
<div class="row"><div class="col-lg-12 main-content main-cart"><div class="page-width"
 data-section-id="template--14229811527742__main" data-section-type="cart-template"> 
<div class="checkout-cart text-center"><i class="cart-empty icon-bag-2"></i>
  <p class="px-3 py-2 cart-empty">No Orders Placed</p> 
  <p class="return-to-shop"> 
    <a class="button btn-dark btn-go-shop" href="index.php">Return To Shop</a>
  </p></div> 
</div>
<style>
.mini-cart .cart-wrapper {display:none !important;}
.checkout-cart {min-height: 250px;}
i.cart-empty {
  font-size: 100px;
  color: #d3d3d4;
}
.btn-go-shop {
  min-width: 200px;
  padding: 16px 0;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: -.015em;
  text-align: center;
  color: #fff; 
  border: none;
  line-height: 1.5;
  display: inline-block;
  text-transform: uppercase;
}
</style>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
<?php

}
include('footer2.php'); ?>