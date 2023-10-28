
<?php

  include('header.php');
 include('cnn.php');
            ?>




        
<div id="main-block-1602925357492" class="main-section-one main_section main_section_1602925357492"
   style="margin-top: 40px;margin-bottom: -4px;padding: ;">
 <?php

if(isset($_GET['id'])){

        $id=$_GET['id'];       
        $new=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `InvoiceNo`='$id'");
         $row=mysqli_fetch_array($new);
         $pid=$row['Product_ID'];
         $product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
         $value=mysqli_fetch_array($product);


 ?>
    <div class="container" >
      <div class="row">
        
  


      
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Product Summary</h5>
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

   <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="city" value="<?php echo $value['Size']; ?>" />
                <label class="form-label" for="form7Example2">Size</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2" readonly class="form-control" name="" value="<?php echo $row['orderdate']; ?>" />
                <label class="form-label" for="form7Example2">Order Date</label>
              </div>
            </div>
            </div>



         
            <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
              <button class=""  onclick='updatebill(<?php echo $id; ?>)' >
              <i class="icon ion-edit" ></i>Product Invoice</button>
           
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
              <button class="" onclick='updatecust(<?php echo $id; ?>)'>
              <i class="icon ion-edit"></i>Request Service</button>
           
              </div>
            </div>
</div>








            
          </div>

          
          <!-- <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form7Example1">Delivery Address</label>
                <textarea readonly name="fulladdress" ><?php echo $name ?>,<?php echo $email ?>,<?php echo $address ?>,<?php echo $state ?>,<?php echo $city ?>,<?php echo $landmark ?>,<?php echo $newpincode ?>,<?php echo $userid ?></textarea>
              </div>
            </div>

          </div> -->

         

         
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


<!-- 
<div class="btn" class="" style="">
<label>Total Amount Payable:&nbsp;&#x20B9;<?php echo "$total"; ?></label></div>
<div class="btn" class="btn btn-primary">
      
          <input type="submit" style="background-color:orange;margin-left:95px;"  name="pay" class="form-control" value="Proceed">
          </div> -->

                  </div></div></div>
                </div</div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
                        
                        function updatebill(rnum)
                           {
                                   window.location.href="invoice.php?invoice=<?php echo $id; ?>";
                                  //  window.open("invoice.php?invoice=<?php echo $id; ?>");
                          
                               
                           }
                           
                               </script>


  <script type="text/javascript">
  function updatecust(rnum)
                          {
                              window.location.href="requestservices.php?invoice=<?php echo $id; ?>";
                            //  window.open("requestservices.php?invoice=<?php echo $id; ?>");
                          }
                         
                          
                              </script>

  <?php
}
include('footer2.php');
          
        

?>