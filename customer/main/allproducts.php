<?php include('header.php'); ?>
<h5></h5>

<div class="main-container "><div class="main-wrapper">
          <div class="main pt-main">











</div><div id="shopify-section-template--14229811593278__product-grid" class="shopify-section"><!-- /templates/collection.liquid -->
<link href="../../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/sidebar270f.css?v=165721966743405894171640001873" rel="stylesheet" type="text/css" media="all" />
<link href="../../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/collection8e3b.css?v=93741563680212866761640001788" rel="stylesheet" type="text/css" media="all" /> 

 

   

<div id="product-main" class="product-main">
  <div class="container collection">
    <div class="row">

 
        </div>
        
       
              <!-- /snippets/collection-sorting.liquid --> 

              
   <?php
   include('cnn.php');

   $all=mysqli_query($conn,"SELECT * FROM `products` WHERE `Status`='Active' ");
   while($row=mysqli_fetch_array($all)){


?>
              
    <div class="category-products products list">
              <div id="products-grid" class="collection products-grid" data-id="template--14229811593278__product-grid">
                
                





<div class="item product product-col product-default product-type-simple " >
  
<div class="product-inner">
  <div class="product-image"> 
    <a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>"><div class="inner img-effect">
        <img data-src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>" 
        alt="Gentle Shoes" class="img-responsive main lazyload" style="padding-top: 100%;">
        
        <img data-src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>"
         alt="Gentle Shoes" class="hover-image img-responsive lazyload" style="padding-top: 100%;">
        
      </div>
      
    </a>
  
   
  </div>
  <div class="product-content"><span class="category-list"><a href="#" title="">LATEST PRODUCTS</a>,&nbsp;
  <a href="#" title=""></a></span>
  <a class="product-loop-title"  href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>">
      <h3 class="shopify-loop-product__title" style="width:800px;">  
      <?php echo $row['ProductName']; ?>
      </h3> 
   
     

    <div class="description" style="width:800px;"> <?php echo $row['Description']; ?>
    </div><span class="price"><span class="price-wrapper"><span class="shopify-Price-amount amount"><span class="money"> &#x20B9;<?php echo $row['Price']; ?></span></span></span>
    </span><div class="add-links-wrap">
  <div class="add-links clearfix"><a href="viewproduct.php?pid=<?php echo $row['Product_ID']; ?>"
   class="button product_type_variable add_to_cart_button"><span>Add to Cart</span></a><div class="yith-wcwl-add-to-wishlist">
      <!-- <div class="yith-wcwl-add-button show">  
        <div class="product-wishlist wishlist-4748716048446">
          <a href="javascript:;" data-product-handle="gentle-shoes" data-product-title="Gentle Shoes" class="add_to_wishlist link-wishlist" title="Add to wishlist"><span>Add to wishlist</span></a>
        </div>
      </div>  -->
    </div>
    <!-- <div class="clear"></div>
    <a href="javascript:;" data-product-handle="gentle-shoes" data-product-title="Gentle Shoes" class="link-compare"> 
        <span>Add to compare</span>
      </a>-->
    </div></div></div> 
</div></div>
                
 _______________________________________________________________________________________________________________________________________________________________________________________________
 <h5></h5>               
<?php
   }
?>


   

</div></div>
                
              </div>
            </div>
            <!-- /snippets/collection-sorting.liquid -->


          </div>
        </div>
      </div>
      
      <div class="col-lg-3 sidebar col-left">
        <div class="mobile-canvas-overlay close-left"></div>
  </div>

  </div>
  </div>
  </div><div class="porto-custom-block">  
              <div class="row py-3">

  



 
 


        	</div></div>  
      

<div class="widget-sidebar widget-boxslide" style="margin-bottom:30px;">
            <div class="owl-box-icon">
              <div class="data-carousel"
                   data-items="1"
                   data-auto=""
                   data-paging="true"
                   data-nav="false"
                   data-prev=''
                   data-margin="0"
                   data-next='' style="display: none;"></div>
              <div class="owl-carousel carousel-init dots-style-1"><div class="item">  
                  <div class="porto-sicon-box style_1 top-icon">

</div> 
                </div></div>
            </div>
          </div><div class="widget-sidebar widget-custom">  
              <div class="widget 
 widget_newsletter text-center" style="background: #f4f4f4;margin-bottom:30px;">
  <!-- <div class="box-content" style="padding: 30px 24px 16px 24px;">
    <h4 class="widget-title">Subscribe Newsletter</h4>
<div class="widget_wysija_cont">
<p style="font-size:13px;">Get all the latest information on Events, Sales and Offers.</p>
<div class="wysija-paragraph">

<div class="newsletter-footer">
  <form action="http://icotheme.us12.list-manage.com/subscribe/post?u=494713daf8c644965e816bf29&amp;id=2f9eab1a8a" method="post" target="_blank" name="mc-embedded-subscribe-form">
    <span class="new-text">
      <input id="fnc-email" placeholder="Email Address" type="email" value="" name="EMAIL" class="input-group-field" aria-label="Email Address">
    </span>
    <span class="new-button">
      <button type="submit" class="btn-button btn btn-primary" name="subscribe">Submit</button>
    </span>
  </form>
</div>
</div>
</div>
  </div> -->
</div> 
            </div>
       
                </div></div>
            </div>
          </div></div></div>
    </div>
  </div>
</div>





</div><!-- END content_for_index -->
          </div>
        </div>
      </div>
      <!-- begin site-footer -->
      <div class="box_footer" style="visibility:hidden">
        <div id="shopify-section-footer" class="shopify-section"><footer class="footer-wrapper "><div class="footer-middle">
    <div class="level0 container"><div class="row"><div class="col-lg-3 info-footer">
          <div class="widget-wrapper"><div class="footer-block-title">
              <h3>
                <span>ABOUT US</span>
              </h3>
            </div><div class="block_content">   
              <a href="index.html" target="_self" style="margin-bottom: 20px;display: block;">
<img class="lazyload" width="111" data-src="//cdn.shopify.com/s/files/1/1613/0177/files/logo_ecomwhite.png" alt="external">
</a>
<div class="textwidget custom-html-widget" style="margin-bottom: 20px;">
<p class="mb-4" style="">Hey customer,</p>
<p>We believe in quality we can promise you a quality product and quality service Enjoy shopping with us...!</p> 

</div> 
            </div></div>
          <div style="clear:both;"></div>
        <!-- </div><div class="col-lg-3 info-footer"> -->
          <!-- <div class="widget-wrapper">
            <div class="footer-block-title">
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
            </div><div class="custom-footer-content"><ul class="footer-list">
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
        <!-- <div class="sticker">
          <i class="icon-up-open"></i>
        </div> -->
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
  </script>

  
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/theme-scriptse62a.js?v=137552514658993020401640001878" type="text/javascript"></script>
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/jquery.elevatezoom.min5c55.js?v=123299089282303306721640001842" type="text/javascript"></script> 
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/theme6851.js?v=178361734015693301011640001878" async></script>
  <script src="../cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" async></script>
  <script src="../cdn.shopify.com/s/files/1/1613/0177/t/28/assets/option_selectionf92b.js?v=72637887344529333141640001857" type="text/javascript"></script>  
 

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from porto-demo13.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 03:23:11 GMT -->
</html>

  </div>
  </div>
  </div>
  </div>


