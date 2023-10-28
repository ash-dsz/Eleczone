
<?php 
include('header.php'); 
include('cnn.php');
error_reporting(0);
?>

<?php
    $cid=$_SESSION['user'];
    $cartpro=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$cid'");
    if(mysqli_num_rows($cartpro)>0){

?>


<?php
if(isset($_SESSION['user'])){

?>
      <div class="main-container "><div class="main-wrapper">
          <div class="main pt-main">
            <div id="shopify-section-template--14229811527742__breadcrumb" class="shopify-section"><div class="sp-page-header page-header-8">

</div>



<div class="container"> 
  <div class="row"><div class="col-lg-12 main-content main-cart"><div class="page-width" data-section-id="template--14229811527742__main" data-section-type="cart-template"> 
  <div class="checkout-cart text-center"><div class="cart-inner cart-v2"> 
        <div class="row mb-5 pb-2">
          <div class="col-lg-8 text-left">
            <div class="cart-table-wrap">
              <table class="shop_table cart-table responsive">
                <thead> 
                  <tr><th class="product-thumbnail" rowspan="1"></th>
                  <th class="product-name"><span>Product</span></th>
                  <th class="product-price"><span>Price</span></th>
                  <th class="product-quantity"><span>Quantity</span></th>
                  <th class="product-subtotal text-center text-md-right"><span>Subtotal</span></th>
                </tr></thead>
                <tbody>
              
                <tr>           
                  <form action="delivery.php" method="post">       
                       <?php
  
                        $cid=$_SESSION['user'];
                       $cartpro=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$cid'");
                      $total=0;
                      while($row=mysqli_fetch_array($cartpro)){
                        $pid=$row['Product_ID'];
                       $img=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
                       $imgs=mysqli_fetch_array($img);
                       $total+=$row['TotalPrice'];
                        ?>
                    <td class="product-thumbnail" data-label="Product">
                      
                      <div class="position-relative">

 
                        <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>">
                          <img class="cart__image lazypreload lazyloaded"
                           data-src="<?php echo "../../admin/Images/ProductImages/". $imgs['Image1'];?>"
                            alt="" src="<?php echo "../../admin/Images/ProductImages/". $imgs['Image1'];?>">
                        </a>
                        <a href="functions.php?cid=<?php echo $row['Cart_ID']; ?>"
                         class="remove remove-product position-absolute">
                         <i class="icon-cancel"></i></a> 
                      </div>
                    </td>
                    <td class="product-name"> 
                      <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>"> 
                      <?php echo $row['Title'];?>
                      </a>
                </td>
                    <td class="product-price" data-label="Price">
                      <span class="cart-price">
                        <span class="money">&#x20B9;<?php  echo $row['price'];?></span>
                      </span></td>
                    <td class="product-quantity" data-label="Quantity"> 
                      <div class="input-box">
                        <?php  echo $row['qty'];?>
                      </div>
                    </td>
                    <td class="product-subtotal text-center text-md-right" data-label="Subtotal">
                      <span class="shopify-Price-amount amount">&#x20B9;<?php  echo $row['TotalPrice'];?></span>
                    </td>
                  </tr>
                  
                  <?php
                  }
                  ?><tr>
                    <td colspan="10" class="actions px-md-2">
                      <div class="d-sm-flex justify-content-between">
                        <a href="index.php" type="submit" class="btn-button"><span>Continue Shopping</span></a>
                      </div>
                    </td>
                  </tr>
                </tbody> 
              </table>
            </div></div>
          <div class="col-lg-4">
            <div class="card card-default">
              <h4 class="card-sub-title text-md m-b-md pb-1">Cart Totals</h4>
              <div class="card-body p-0">
                <table class="responsive cart-total" cellspacing="0">
                  <tbody>
                    <tr class="cart-subtotal">
                      <th><h4 class="mb-0">Subtotal</h4></th>
                      <td> <?php
                      if(isset($_SESSION['user'])){
                        $cid=$_SESSION['user'];
                       $cartpro=mysqli_query($conn,"SELECT * FROM `cart` WHERE `Customer_ID`='$cid' ");
                       $row=mysqli_fetch_array($cartpro);
                   
                      ?>
                        <span class="shopify-Price-amount amount"> 
                          <span class="price"><span class="money">&#x20B9;<?php  echo $total;?></span></span>
                        </span>
                      </td>
                
                    </tr> 
                    
  

  <!--[if lte IE 8]>
  <style> #shipping-calculator { display: none; } </style>
  <![endif]-->
  
  <script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>
  <script src="/services/javascripts/countries.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/jquery.cart.min.js?v=93854832272249694691640001842"  type="text/javascript"></script>
  
  <script>
    var submitButton = 'Get a Quote';
    var submitButtonDisabled = 'Calculating...' ;
     
    Shopify.Cart.ShippingCalculator.show({
      submitButton: submitButton,
      submitButtonDisabled: submitButtonDisabled
      ,
      moneyFormat: "${{amount}} USD"
    });
  </script>
</div>

                      </th>
                    </tr> 
                    <tr class="order-total">
                      <th><h4 class="text-md mb-0">Total</h4></th>
                      <td>
                        <strong>
                       
                          <span class="woocommerce-Price-amount amount">
                            <span class="price"><span class="money">&#x20B9;<?php  echo $total;?></span></span>
                          </span>
                        </strong>
                      </td>
                    </tr>
                  </tbody>
                </table>

              <a href="delivery.php">
                <div class="sp-proceed-to-checkout"> 
                  <button type="button" class="btn btn-dark w-100 m-t-lg py-3" name="check-add">
                    Proceed to checkout<i class="icon-arrow-right-solid no-padding pl-3"></i>
                  </button>
                </div></a>  
              </div>
            </div>
          </div>
        </div>
      </form> 
    </div></div> 
</div>
 <?php
  }}
  ?>
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



<h5></h5>

</div><div id="shopify-section-template--14229811527742__main" class="shopify-section">
  <link href="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/sidebar270f.css?v=165721966743405894171640001873"
   rel="stylesheet" type="text/css" media="all" />
<link href="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/page-cart357c.css?v=45969037456365905621640001858"
 rel="stylesheet" type="text/css" media="all" />
 <?php
      if(!isset($_SESSION['user'])){
      ?>
<div class="container"> 
 
  <div class="row"><div class="col-lg-12 main-content main-cart"><div class="page-width"
   data-section-id="template--14229811527742__main" data-section-type="cart-template"> 
  <div class="checkout-cart text-center"><i class="cart-empty icon-bag-2"></i>
    <p class="px-3 py-2 cart-empty">Your cart is currently empty.</p> 
    <p class="return-to-shop"> 
      <a class="button btn-dark btn-go-shop" href="index.php">Return To Shop</a>
    </p></div> 
</div><?php
}
?>
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



</div>         </div>
        </div>
      </div>
<?php

    }
    else{
      ?>
     <h5></h5> 
<div class="container"> 
 
<div class="row"><div class="col-lg-12 main-content main-cart"><div class="page-width"
 data-section-id="template--14229811527742__main" data-section-type="cart-template"> 
<div class="checkout-cart text-center"><i class="cart-empty icon-bag-2"></i>
  <p class="px-3 py-2 cart-empty">Your cart is currently empty.</p> 
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

    ?>

<?php include('footer.php'); ?>