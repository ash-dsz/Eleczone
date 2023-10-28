
<div id="shopify-section-1602925357492" class="shopify-section"><div data-section-id="1602925357492" data-section-type="main-section">
  <link href="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/section-testimonials6953.css?v=84949072041685779621640001870" rel="stylesheet" type="text/css" media="all" />
  <link href="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/section-blog-posts61b2.css?v=79615050514198099681640001868" rel="stylesheet" type="text/css" media="all" />
  <link href="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/section-main0bdc.css?v=42045506900010228941640001869" rel="stylesheet" type="text/css" media="all" />
  
  <div id="main-block-1602925357492" class="main-section-one main_section main_section_1602925357492"
   style="margin-top: 40px;margin-bottom: -4px;padding: ;">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 order-1 col-md-8"><div class="tab-product-collection hide-loadmore" style="margin-bottom:10px;">
            <div class="category-list"> 
              <div class="tab-selector"></div>
            <div class="category-detail">
              <div class="porto-tab-content porto-products"> 
  <div class="porto-custom-block">  
              <div class="row py-3">
  <div class="col-md-12 col-lg-4">
 <div class="products-collection widget-products porto-products title-"><h2 class="section-title text-left"><span class="inline-title"> 
      TOP RATED PRODUCTS 
    </span></h2><div class="widget"><ul class="product_list_widget">

    <?php 

include('cnn.php');
  $result=mysqli_query($conn,"SELECT * FROM `products` ORDER BY `Product_ID` DESC LIMIT 3 ");
if(mysqli_num_rows($result)>0){


  while($row =mysqli_fetch_assoc($result)){
  
  ?>

<li>
        <a class="product-image" href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>">
          <div class="inner">
            <img src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>" alt="" 
            class="img-responsive main" style="width:auto;"/>
          </div> 
        </a>
        <div class="product-details">  
          <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>" title="<?php echo  $row['ProductName'];?>">
            <span class="product-title"> 
            <?php echo  $row['ProductName'];?>
            </span>
          </a>
          <!-- <div class="star-rating">
            <span class="shopify-product-reviews-badge" data-id="4748717817918"></span>
          </div> -->
          <span class="shopify-Price-amount amount"><span class="money">&#x20B9;<?php echo  $row['Price'];?></span></span></div>
      </li>
<?php
  }}
?>
</ul></div>
</div>
  </div>
  <div class="col-md-12 col-lg-4">
  



 
 








 <div class="products-collection widget-products porto-products title-"><h2 class="section-title text-left"><span class="inline-title"> 
      BEST SELLING PRODUCTS 
    </span></h2><div class="widget"><ul class="product_list_widget">
    <?php 
include('cnn.php');
  $result=mysqli_query($conn,"SELECT * FROM `products` ORDER BY `Product_ID` ASC LIMIT 3 ");
if(mysqli_num_rows($result)>0){


  while($row =mysqli_fetch_assoc($result)){
  
  ?>

<li>
        <a class="product-image" href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>">
          <div class="inner">
            <img src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>" alt="" class="img-responsive main" style="width:auto;"/>
          </div> 
        </a>
        <div class="product-details">  
          <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>" title=" <?php echo  $row['ProductName'];?> ">
            <span class="product-title"> 
            <?php echo  $row['ProductName'];?>
            </span>
          </a>
          <!-- <div class="star-rating">
            <span class="shopify-product-reviews-badge" data-id=""></span>
          </div> -->
          <span class="shopify-Price-amount amount"><span class="money">&#x20B9; <?php echo  $row['Price'];?> </span></span></div>
      </li>
      <?php
  }}
?>

</ul></div>
</div>
  </div>
  <div class="col-md-12 col-lg-4">
    



 
 








 <div class="products-collection widget-products porto-products title-"><h2 class="section-title text-left"><span class="inline-title"> 
      LATEST PRODUCTS 
    </span></h2><div class="widget"><ul class="product_list_widget">
    <?php 
include('cnn.php');
  $result=mysqli_query($conn,"SELECT * FROM `products` ORDER BY `Product_ID` DESC LIMIT 3 ");
if(mysqli_num_rows($result)>0){


  while($row =mysqli_fetch_assoc($result)){
  
  ?>

<li>
        <a class="product-image" href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>">
          <div class="inner" >
            <img src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>" alt="s" class="img-responsive main" style="width:auto;"/>
          </div> 
        </a>
        <div class="product-details">  
          <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>" title="<?php echo  $row['ProductName'];?>">
            <span class="product-title"> 
            <?php echo  $row['ProductName'];?>
            </span>
          </a>
          <!-- <div class="star-rating">
            <span class="shopify-product-reviews-badge" data-id="4748717817918"></span>
          </div> -->
          <span class="shopify-Price-amount amount"><span class="money">&#x20B9;<?php echo  $row['Price'];?></span></span></div>
      </li>
<?php
  }}
?>
</ul></div>
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


      <!-- begin site-footer -->
      <div class="box_footer">
        <div id="shopify-section-footer" class="shopify-section"><footer class="footer-wrapper "><div class="footer-middle">
    <div class="level0 container"><div class="row"><div class="col-lg-3 info-footer">
          <div class="widget-wrapper"><div class="footer-block-title">
              <h3>
                <span>ABOUT US</span>
              </h3>
            </div><div class="block_content">   
              <a href="index.html" target="_self" style="margin-bottom: 20px;display: block;">
<img class="lazyload" width="170px;" height="auto;" data-src="../../img/eleclogoo.jpg" alt="external">
</a>
<div class="textwidget custom-html-widget" style="margin-bottom: 20px;">
<p class="mb-4" style="">Hey customer,</p>
<p>We believe in quality we can promise you a quality product and quality service Enjoy shopping with us...!</p> </div> 
            </div></div>
          <div style="clear:both;"></div>
        <!-- </div><div class="col-lg-3 info-footer">
          <div class="widget-wrapper"><div class="footer-block-title">
              <h3>
                <span>CONTACT INFO</span>
              </h3>
            </div><div class="block_content">   
              <ul class="contact-info">
            <li>
<b style="color: #fff;text-transform:uppercase;">Address:</b><span>123 Street Name, City, England</span>
</li>
            <li>
<b style="color: #fff;text-transform:uppercase;">Phone:</b><span>(123) 456-7890</span>
</li>
            <li>
<b style="color: #fff;text-transform:uppercase;">Email:</b><span><a href="mailto:mail@example.com">mail@example.com</a></span>
</li>
            <li>
<b style="color: #fff;text-transform:uppercase;">Working Days/Hours:</b><span>Mon - Sun / 9:00 AM - 8:00 PM</span>
</li>
        </ul>
<div class="share-links" style="margin-top: 20px; margin-bottom: 20px;">
  <a href="#" target="_blank" class="share-facebook">Facebook</a> 
  <a href="#" target="_blank" class="share-twitter">Twitter</a>
  <a href="#" target="_blank" class="share-linkedin">Linkedin</a>
</div> 
            </div></div> -->
        </div><div class="col-lg-3 info-footer">
          <div class="widget-wrapper"><div class="footer-block-title">
              <h3>
                <span>CUSTOMER SERVICE</span>
              </h3>
            </div><div class="custom-footer-content"><ul class="footer-list"><li class="theme-color"> 
            <li class="theme-color"> 
                  <a href="myorders.php">My Orders</a>
                </li><li class="theme-color"> 
                  <a href="mngaccount.php">My Account</a>
                </li><li class="theme-color"> 
                  <a href="index.php">search product</a>
                </li><li class="theme-color"> 
                  <a href="cart.php">My Cart</a>
                </li><li class="theme-color"> 
                  <a href="index.php">About Us</a>
                </li>
              </ul>
            </div></div>
        </div><div class="col-lg-3 info-footer">
          <div class="widget-wrapper"><div class="footer-block-title">
              <h3>
                <span>Service Procedure</span>
              </h3>
            </div><div class="block_content">   
              <div class="tagcloud" style="margin-top: -.3846em;margin-bottom: -.3846em;">
              Scan the QR code available on the product and raise the request we promise you to provide quality service and good experience

</div> 
            </div></div>
        </div></div>
    </div>
  </div><div class="footer-bottom">
    <div class="container"><div class="custom-block order-lg-last ml-lg-auto"> 
        <img class="lazyload" data-src="../cdn.shopify.com/s/files/1/1632/5913/files/shop1_payment_logo.png"> 
      </div></div>
  </div><div id="back-top" class="hidden-phone">
    <a href="#top">
      <div class="sticker-wrapper">
        <div class="sticker">
          <i class="icon-up-open"></i>
        </div>
      </div>
    </a>
  </div></footer>





</div>
      </div>
      <div id="shopify-section-sticky-footer-navbar" class="shopify-section">




</div>
    </div>
  </div>
  <!-- //site-footer --><style>
#popup_newsletter {background-position: center center;
  background-repeat: no-repeat;background-size: cover;max-width: 740px;
}
.block-subscribe {
  background: #fff;
  padding: 20px 30px;
  text-align: left;
  margin: 40px auto;
  position: relative;
}

</style>

<script type="text/javascript" >
  var newsletterData = {};
  newsletterData.delay = '100';
</script>
<div id="wishlist-box" class="box-popup animate-box">
  <div class="box-inner">
    <div class="item">
      <div class="heading">Just added to your wishlist:</div>
      <div class="product-info">
        <div class="img">
          <div class="product-title"><a class="product-link" href="#"></a></div>
          <a class="product-link" href="#"><img class="product-img" data-src="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/noimage.jpg?v=92931019875364646391640001852" alt="" width="90" /></a>
        </div>
      </div>
    </div>
    <div class="action">
      <div class="action-content">
        <a class="btn-button bordered" href="#">My Wishlist</a>
        <button type="button" class="btn-button close-box bordered"><span>Continue</span></button>
      </div>
    </div>
  </div>
</div>
<div id="cart-box" class="box-popup animate-box">
  <div class="box-inner">
    <div class="item">
      <div class="heading">You&#39;ve just added this product to the cart:</div>
      <div class="product-info">
        <div class="img">
          <div class="product-title"><a class="product-link" href="#"></a></div>
          <a class="product-link" href="#"><img class="product-img" data-src="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/noimage.jpg?v=92931019875364646391640001852" alt="" width="81px" /></a>
        </div>
      </div>
    </div>
    <div class="action">
      <div class="action-content">
        <a class="btn-button bordered" href="cart.html">Go to cart page</a>
        <button type="button" class="btn-button close-box bordered"><span>Continue</span></button>
      </div>
    </div>
  </div>
</div>

<div id="error-notice" class="box-popup animate-box">
  <div class="box-inner">
    <div class="item">
      <div class="heading"></div>
      <div class="message"></div>
    </div>
    <div class="action">
      <div class="cart">
        <button type="button" class="btn-button close-box bordered">Continue</button>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">
    $("img").addClass('lazyload lazypreload');
    document.addEventListener('lazybeforeunveil', function(e){
      var lazy_bg = e.target.getAttribute('data-bg');
      if(lazy_bg) {
        e.target.style.backgroundImage = 'url(' + lazy_bg + ')';
      }
    });
    var frontendData = {};
    frontendData.enableCurrency = true;
    frontendData.ajax_search = true;
    frontendData.search_by_collection = true;
    frontendData.imageLazyLoad = true;
     
    var cartData = {};
    cartData.ajax_cart_use = true;
    cartData.shopping_cart_action = 'widget';
    var wishlistData = {};
    var compareData = {};
    var obProductData = {};
    obProductData.in_stock = 'In Stock';
    obProductData.out_of_stock = 'Out Of Stock';
    obProductData.add_to_cart = 'Add to Cart';
    obProductData.sold_out = 'Sold Out';
    cartData.removeItemLabel = 'Remove item';
    cartData.totalLabel = 'Total:';
    cartData.totalNumb = 'item(s)';
    cartData.noItemLabel = 'You have no items in your shopping cart.';
    cartData.buttonViewCart = 'View cart';
    cartData.buttonCheckout = 'Checkout';
    window.inventory_text = {
      in_stock: "In Stock",
      many_in_stock: "Many In Stock",
      out_of_stock: "Out Of Stock",
      add_to_cart: "Add to Cart",
      sold_out: "Sold Out"
    };

    window.date_text = {
      year_text: "years",
      month_text: "months",
      week_text: "weeks",
      day_text: "days",
      year_singular_text: "year",
      month_singular_text: "month",
      week_singular_text: "week",
      day_singular_text: "day",
      hour_text: "Hours",
      min_text: "Mins",
      sec_text: "Secs",
      hour_singular_text: "Hour",
      min_singular_text: "Min",
      sec_singular_text: "Sec"
    };
    wishlistData.wishlist = 'Wishlist';
    wishlistData.product = 'Product';
    wishlistData.instock = 'In Stock';
    wishlistData.outstock = 'Out Of Stock';
    wishlistData.addtocart = 'Add to Cart';
    wishlistData.remove = 'has removed from wishlist';
    wishlistData.no_item = 'There is no items in wishlist box';
    wishlistData.item_exist = 'is exist in wishlist';
    wishlistData.item_added = 'has added to wishlist successful';
    compareData.compare = 'Comparing box';
    compareData.product = 'Product';
    compareData.quantity = 'Quantity';
    compareData.options = 'Options';
    compareData.remove = 'has removed from comparing box';
    compareData.no_item = 'There is no items in comparing box';
    compareData.item_exist = 'is exist in compare';
    compareData.item_added = 'has added to comparing box successful'; 
  </script><script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/theme-scriptse62a.js?v=137552514658993020401640001878" type="text/javascript"></script>
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/jquery.elevatezoom.min5c55.js?v=123299089282303306721640001842" type="text/javascript"></script> 
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/theme6851.js?v=178361734015693301011640001878" async></script>
  <script src="../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" async></script>
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/option_selectionf92b.js?v=72637887344529333141640001857" type="text/javascript"></script>  
  <script>
    
    
  </script>
  <div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><span class="brackets">Wishlist</span><span id="wishlistCount"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div id="wishlistAlert"></div>
        <div id="wishlistTableList">
          <table class="shop_table data-table cart-table wishlist-table" style="display:none;"> 
            <thead>
              <tr class="first last">
                <th class="product-thumbnail" colspan="1">&nbsp;</th>
                <th class="product-name" colspan="2"><span class="nobr"><span class="brackets">Product</span></span></th>
                <th class="product-price" colspan="1"><span class="nobr"><span class="brackets">Price</span></span></th>
                <th class="product-stock-status"><span class="brackets">Quantity</span></th>
                <th class="product-add-to-cart"><span class="brackets">Actions</span></th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> 
<div id="wishlistModalBody" hidden>
  <div class="form_cart">
    <table class="shop_table data-table cart-table wishlist-table">
      <tbody>
        <tr class="odd first last wishlist-option-item-0">
          <td class="product-thumbnail">
            <div class="position-relative">
              <a><img class="lazyload" data-src="#image#"></a>
              <a href="javascript:void(0)" class="remove remove-wishlist remove-product position-absolute" data-product-handle="#handle#" data-product-title="#title#" onclick="removeWishlist(event)">×</a>
            </div>
          </td>
          <td class="product-name"><a href="#urlProduct#">#title#</a></td>
          <td colspan="1" class="a-right product-unittax">
            <div class="price">
              <span class="special-price">#price#</span>
              <span class="compare-price"><span class="compare_at_price"></span></span>
            </div>
          </td>
          <td class="product-stock-status">
            <span class="wishlist-in-stock text-dark">#stock#</span>
          </td>
          <td class="product-add-to-cart"></td> 
        </tr>
      </tbody>
    </table>
  </div>
</div>
  <div tabindex="-1" role="dialog" id="compareBox" class="modal fade">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><span class="brackets">Comparing box</span><span id="compareCount"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div id="compareAlert"></div>
        <div id="compareTableList">
          <table class="data-table cart-table">
            <tbody>
              <tr>
                <td><span class="brackets">Features</span></td>
              </tr>
              <tr>
                <td><span class="brackets">Availability:</span></td>
              </tr>
              <tr>
                <td><span class="brackets">Price</span></td>
              </tr>
              <tr>
                <td><span class="brackets">Options</span></td>
              </tr>
              <tr>
                <td><span class="brackets">Actions</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<!-- Mirrored from porto-demo13.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 03:23:11 GMT -->
</html>
