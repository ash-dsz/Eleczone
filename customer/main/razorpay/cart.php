<?php 

    $active='Cart';
    include("includes/headercart.php");
    error_reporting(0);
?>
<?php
if(isset($_SESSION["cart_item"])){
$total_quantity = 0;
$total_price = 0;
?>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                           
                           <table class="table"><!-- table Begin -->
                            <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th >Product</th>
                                       <th> Unit Price</th>
                                       <th>Quantity</th>
                                       <th >Sub-Total</th>
                                       <th>Delete</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                                <?php
                                    foreach ($_SESSION["cart_item"] as $item)
                                    {
                                      $item_price = $item["quantity"]*$item["price"];
                                      ?>
                            
                               
                               
                               <tbody><!-- tbody Begin -->
                                  
                                  
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <?php echo $item["name"]; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                        <i class="fa fa-inr"> <?php echo $item["price"]; ?>
                                           
                                       </td>
                                       

                                       
                                       
                                       <td>
                                        <?php echo $item["quantity"]; ?>
                                     </td>
                                       <td>

                                        <i class="fa fa-inr"> <?php echo $item["subtotal"]; ?>
                                       </td>
                                       
                                       
                                        <td> <a href="removecart.php?action=remove&product_id=<?php echo $item['p_id']; ?>" class="btnRemoveAction">
                                          <i class="fa fa-trash-o"></i>delete
                                        </a>
                                         </td>
                                         <?php
                                         $total_quantity += $item["quantity"];
                                          $total_price += ($item["price"]*$item["quantity"]);
                                            }
                                          ?>
                                       
                                   </tr><!-- tr Finish -->
                                   
                                    </div>

                                                                
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2"><i class="fa fa-inr"></i> <?php echo number_format($total_price, 2); ?></th>
                                       <?php
                                       session_start();
                                       $_SESSION['total_price']=$total_price;
                                       ?>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           <?php
                                 }
                                 else {
?>
<div class="no-records"><h2 style="color: red">Your Cart is Empty</h2></div>
<?php
}
?>
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                              <?php
                              if(!empty($_SESSION["cart_item"]))
                              {
                              ?>
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               <?php }?>
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   
                   
               </div><!-- box Finish -->
               
             <?php

                  //if(isset($_GET['action']))
                 // {
                  
                    // if(!empty($_SESSION["cart_item"]))
                  //{
                  //    if(count($_SESSION["cart_item"])==1)
                      //{
                         //session_destroy();
                      //}
                  //else{
                       // foreach($_SESSION["cart_item"] as $k => $v) {
                              //if($_GET["p_id"] == $k)
                        //unset($_SESSION["cart_item"][$k]);
                         // if(empty($_SESSION["cart_item"]))
                                //unset($_SESSION["cart_item"]);
                      //}
                 // }
                //}
//}

               ?>
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                   $get_products = "select * from product order by rand() LIMIT 0,3";
                   
                   $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       echo "
                       
                    <div class='col-md-2 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class='product same-height'><!-- product same-height Begin -->
                           <a href='details.php?pro_id=$pro_id'>
                               <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
                            </a>
                            
                            <div class='text'><!-- text Begin -->
                                <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                
                                <p class='price'>$$pro_price</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";
                       
                   }
                   
                   ?>
                </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
          
           
   <?php 
    
    include("includes/footer.php");
    
      
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>