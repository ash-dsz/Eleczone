<?php
error_reporting(0);
include ('header.php');
include('cnn.php');
?>


<div class="main pt-main">








</div><div id="shopify-section-template--14229811888190__main" class="shopify-section"><!-- /templates/product.liquid -->
<link href="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/product.css?v=130299813570055295301640001864" rel="stylesheet" type="text/css" media="all">
<link href="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/jquery.fancybox.css?v=89610375720255671161640001843" rel="stylesheet" type="text/css" media="all"> 
<script src="//cdn.shopify.com/s/files/1/1613/0177/t/28/assets/jquery.fancybox.pack.js?v=98388074616830255951640001843" type="text/javascript"></script>   
<script>
// (c) Copyright 2014 Caroline Schnapp. All Rights Reserved. Contact: mllegeorgesand@gmail.com
// See http://docs.shopify.com/manual/configuration/store-customization/advanced-navigation/linked-product-options
  Shopify.optionsMap = {};
  Shopify.updateOptionsInSelector = function(selectorIndex) {
    switch (selectorIndex) {
      case 0:
        var key = 'root';
        var selector = jQuery('.product-page-area .single-option-selector:eq(0)');
        break;
      case 1:
        var key = jQuery('.product-page-area .single-option-selector:eq(0)').val();
        var selector = jQuery('.product-page-area .single-option-selector:eq(1)');
        break;
      case 2:
        var key = jQuery('.product-page-area .single-option-selector:eq(0)').val();
        key += ' / ' + jQuery('.product-page-area .single-option-selector:eq(1)').val();
        var selector = jQuery('.product-page-area .single-option-selector:eq(2)');
    }

    var initialValue = selector.val();
    selector.empty();
    var availableOptions = Shopify.optionsMap[key];
    if (availableOptions && availableOptions.length) {
      for (var i = 0; i < availableOptions.length; i++) {
        var option = availableOptions[i];
        var newOption = jQuery('<option></option>').val(option).html(option);
        selector.append(newOption);
      }
      jQuery('.product-page-area .swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
        if (jQuery.inArray(jQuery(this).attr('data-value'), availableOptions) !== -1) {
          jQuery(this).removeClass('soldout').show().find(':radio').removeAttr('disabled', 'disabled').removeAttr('checked');
        } else {
          jQuery(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled', 'disabled');
        }
      });
      if (jQuery.inArray(initialValue, availableOptions) !== -1) {
        selector.val(initialValue);
      }
      selector.trigger('change');
    }
  };
  Shopify.linkOptionSelectors = function(product) {
    // Building our mapping object.
    for (var i = 0; i < product.variants.length; i++) {
      var variant = product.variants[i];
      //if (variant.available) {
        // Gathering values for the 1st drop-down.
        Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];
        Shopify.optionsMap['root'].push(variant.option1);
        Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);
        // Gathering values for the 2nd drop-down.
        if (product.options.length > 1) {
          var key = variant.option1;
          Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
          Shopify.optionsMap[key].push(variant.option2);
          Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
        }
        // Gathering values for the 3rd drop-down.
        if (product.options.length === 3) {
          var key = variant.option1 + ' / ' + variant.option2;
          Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
          Shopify.optionsMap[key].push(variant.option3);
          Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
        }
      //}
    }
    // Update options right away.
    Shopify.updateOptionsInSelector(0);
    if (product.options.length > 1) Shopify.updateOptionsInSelector(1);
    if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
    // When there is an update in the first dropdown.
    jQuery(".product-page-area .single-option-selector:eq(0)").change(function() {
      Shopify.updateOptionsInSelector(1);
      if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
      return true;
    });
    // When there is an update in the second dropdown.
    jQuery(".product-page-area .single-option-selector:eq(1)").change(function() {
      if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
      return true;
    });

  }; 
</script>
<script>
  var productsObj = {}; 
  var dataZoom = {}; 
  var swatch_color_type = 1;
  var product_swatch_size = 'size-small';
  var product_swatch_setting = '1';
  dataZoom.lightbox = true; 
  dataZoom.position = 'inside'; 
</script>

<?php
if(isset($_GET['pid'])){
$id=$_GET['pid'];

}

else
{
  echo "Something went wrong";
}
$result=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`= '$id'");
if(mysqli_num_rows($result)<0){
  echo "Some Error occured";
}
$row=mysqli_fetch_array($result);
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
        <div class="product-name top-product-detail">
          <h1>
            <a href="#"> 
              <?php echo $row['ProductName'];?>
            </a>
          </h1>
        </div><div class="prev-next-products"><div class="product-nav product-next">
            <a class="product-next" href="#">
              <i class="icon-angle-right"></i>
            </a><div class="product-pop" data-with-product="porto-gray-cap">
              
               <img class="product-image lazyloaded" 
               data-src=" <?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>"
                alt="Porto Gray Cap" src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>">
               <h3 class="product-name"><?php echo $row['ProductName'];?></h3>
              
            </div>
          </div></div><div class="product-share">
  <!-- <div class="share-links">
    <a href="https://www.facebook.com/sharer.php?u=https://porto-demo13.myshopify.com/products/men-gentle-shoes" target="_blank" rel="nofollow" title="Men Gentle Shoes" class="share-facebook">Facebook</a>
    <a href="https://twitter.com/intent/tweet?text=Men Gentle Shoes&amp;url=https://porto-demo13.myshopify.com/products/men-gentle-shoes" target="_blank" rel="nofollow" title="Men Gentle Shoes" class="share-twitter">Twitter</a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://porto-demo13.myshopify.com/products/men-gentle-shoes&amp;title=Men Gentle Shoes" target="_blank" rel="nofollow" class="share-linkedin" title="Men Gentle Shoes">LinkedIn</a>
    <a href="https://plus.google.com/share?url=https://porto-demo13.myshopify.com/products/men-gentle-shoes" target="_blank" rel="nofollow" title="Men Gentle Shoes" class="share-googleplus">Google +</a>
    <a href="mailto:?subject=Men Gentle Shoes&amp;body=https://porto-demo13.myshopify.com/products/men-gentle-shoes" target="_blank" rel="nofollow" title="Men Gentle Shoes" class="share-email">Email</a>
  </div> -->
</div>
<div class="review-product-details">
          <!-- <span class="spr-badge" id="spr_badge_4748717817918" data-rating="0.0"><span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style="color: #ffc600;" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" style="color: #ffc600;" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" style="color: #ffc600;" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" style="color: #ffc600;" aria-hidden="true"></i><i class="spr-icon spr-icon-star-empty" style="color: #ffc600;" aria-hidden="true"></i></span>
          <span class="spr-badge-caption">No reviews</span> -->
</span>

        </div>
        <div class="clear-both"></div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="product-shop" style="top: 0px;">
            <div class="product-type-data">
              <div class="price-box">
                <div id="" class="detail-price" itemprop="price"><div class="price"><span class="money"> &#x20B9;<?php  echo $row['Price'];?></span></div></div>
                <meta itemprop="priceCurrency" content="USD"><link itemprop="availability" href="http://schema.org/InStock"></div><s>&#x20B9;<?php  echo $row['ComparePrice'];?></s> 
            </div>
            
<div class="short-description-detail">
              <div class="money">Brand:&nbsp;<span><b><?php  echo $row['Brand'];?></b></span>
              </div>
            </div><div class="middle-product-detail"><div class="category-list">
                <span>Availability:<?php 
                if($row['Status']=='Active') {  ?> </span>
                <span class="in-stock"><b>In Stock</b></span>
                <?php } 
                elseif($row['Status']=='De-Active'){?></span>
                <span class="in-stock"><b>Out of Stock</b></span>
                <?php }?>
               
              </div>
              <div class="money" style="padding-top:10px;">
                    <label for="product-selectors-option-1">Manufacturer Address:&nbsp;</label>
                    
                    
                  </div>
                  <b> <?php  echo $row['Manufacture_add'];?></b>
              
              <div class="product-category"style="padding-top:10px;">
                <span>Categories:</span>
                
                <span class="category-list"><a href="/collections/best-selling-products" title="">BEST SELLING PRODUCTS</a>,
                &nbsp;<a href="#" title="">FEATURED PRODUCTS</a>,
                &nbsp;<a href="#" title="">LATEST PRODUCTS</a>
                &nbsp;<a href="#" title=""><?php  echo $row['Category'];?></a></span>  
              </div></div><div class="porto-custom-block">
              <div class="custom-block-bar"> 
                <div class="item">
<i class="icon-shipped"></i><h3>FREE<br>SHIPPING</h3>
</div>
<div class="item">
<i class="icon-us-dollar"></i><h3>100% MONEY<br>BACK GUARANTEE</h3>
</div>
<div class="item">
<i class="icon-online-support"></i><h3>ONLINE<br>SUPPORT 24/7</h3>
</div> 
              </div>
            </div></div>
        </div>
        <div class="product-img-box col-lg-6">
          <div class="product-img-list">
            <div class="row"><div class="col-md-12"><div class="product-image-grid image-link">
                  <img class="img-responsive lazypreload lazyloaded"
                   data-src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>" 
                   style="" src="<?php echo "../../admin/Images/ProductImages/". $row['Image1'];?>">
                </div>
              </div><div class="col-md-12"><div class="product-image-grid image-link">
                  <img class="img-responsive lazypreload lazyloaded"
                   data-src="<?php echo "../../admin/Images/ProductImages/". $row['Image2'];?>"
                    style="" src="<?php echo "../../admin/Images/ProductImages/". $row['Image2'];?>">
                </div>
              </div><div class="col-md-12"><div class="product-image-grid image-link">
                  <img class="img-responsive lazypreload lazyloaded" 
                  data-src="<?php echo "../../admin/Images/ProductImages/". $row['Image3'];?>" 
                  style="" src="<?php echo "../../admin/Images/ProductImages/". $row['Image3'];?>">
                </div></div>
              </div>
          </div>
        </div>
        
        <div class="col-lg-3">
          <div class="product-shop" style="top: 0px;">
            <div class="product-shop-wrapper">
              <div class="product-type-main">
                <form method="post" action="functions.php?pid=<?php echo $row['Product_ID']; ?>" id="product-main-form" accept-charset="UTF-8"
                 class="product-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product">
                  <div class="selector-wrapper size">
                    <label for="product-selectors-option-0">Size:&nbsp;</label><b><?php  echo $row['Size'];?></b>
                    
                  </div>
                  <div class="selector-wrapper color">
                    <label for="product-selectors-option-1">Color:&nbsp;</label><b><?php  echo $row['Color'];?></b>
                    
                  </div>
                  
                </div>
                <div class="product-options-bottom">
                  <div class="add-to-cart-box">
                    <label class="qty">Qty:</label>
                    <div class="input-box">
                      <input type="text" id="qty" name="qty" value="1" min="1" class="quantity-selector">
                      <div class="plus-minus">
                        <div class="increase items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;">
                          <i class="icon-up-dir"></i>
                        </div>
                        <div class="reduced items" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;">
                          <i class="icon-down-dir"></i>
                        </div>
                      </div>
                    </div>
                    <div class="actions">
                  <div class="action-list addtocart">
                    <div class="button-wrapper"><div class="button-wrapper-content">
                        <button type="submit" name="add-cart" class="btn-cart add-to-cart bordered uppercase">
                          <i class="icon-cart"></i>
                          <span>Add to Cart</span>
                        </button>
                      </div></div>
                  </div>
                  <!-- <div class="action-list wishlist">
                    <ul class="add-to-links">
  <li><a href="javascript:;" data-product-handle="porto-gray-cap" data-product-title="Porto Gray Cap" class="link-wishlist" title="Add to wishlist"><i class="icon-heart"></i><span>Add to wishlist</span></a></li>
  <li><a href="javascript:;" data-product-handle="porto-gray-cap" data-product-title="Porto Gray Cap" class="link-compare" title="Add to compare"><i class="icon-compare"></i><span>Add to compare</span></a></li>
</ul>
                  </div> -->
                </div></div>
                </div></form></div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-collateral">
    <div class="container">
      <div class="product-description rte" itemprop="description">
        <div class="product-tabs horizontal">
      <ul class="nav level0"><li class="description_tab level0 nav-item">
          <a class="level0 nav-link active" href="#product_tabs_description" role="tab" data-toggle="tab"> 
            Description 
          </a>
        </li><li class="reviews_tab level0 nav-item">
          <a class="level0 nav-link " href="#product_tabs_tabreviews" role="tab" data-toggle="tab" aria-selected="true" aria-control="product_tabs_tabreviews">
            Reviews </a>
            
        </li></ul><div class="clearer"></div><div class="tab-content show active fade collapse" id="product_tabs_description">
          <div class="product-tabs-content-inner clearfix"><?php  echo $row['Description'];?>
          </div>
        </div><div class="tab-content fade collapse" id="product_tabs_tabreviews">
          <div class="product-tabs-content-inner clearfix">
            <div id="shopify-product-reviews" data-id=""></div>
                </div>
              <style scoped="">.spr-icon {
      color: #ffc600;
    }
    a.spr-icon:hover {
      color: #664f00;
    }.spr-container {
    padding: 24px;
    border-color: #ececec;}
  .spr-review, .spr-form {
    border-color: #ececec;
  }
</style>


<div class="spr-container">
  <div class="spr-header">
    <h2 class="spr-header-title">Customer Feedback</h2><div class="spr-summary rte">
      
        <button type="button" class=""  style="background-color:gray;"data-toggle="modal" data-target="#success-header-modal">Write review</button>
      </span>
    </div>
  </div>

  
<form action="reviewctrl.php?id=<?php echo $row['Product_ID'] ?>" method="post">
  <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          
                                            <div class="modal-body">
                                                <h5 class="mt-0">Write review</h5>
                                                <h5></h5>
                          
                               
                                    <div class="form-group">
                                          <h4 class="card-title">Rate</h4>
                                        <select  name="rating" style="border: 1px solid black;" class="form-control"  id="exampleFormControlSelect1" >       
                                            <option>Very Good</option>
                                            <option>Good</option>
                                            <option>Average</option>
                                            <option>Bad</option>
                                            <option>Very Bad</option>

                                        
                                        </select>
                                      <h5></h5>
                                       
                                        <h4 class="card-title">Comment</h4>
                                       <textarea name="comments" placeholder="Type here" required></textarea>
                                            
                                    </div>

                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class=""
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" name="review" class="" >Submit</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>  
</form>

  <h5></h5>
<?php
$Product="Product";
$sql=mysqli_query($conn,"SELECT * FROM `feedback` WHERE `Product_ID` ='$id' AND `ReviewType`='$Product' ORDER BY `Product_ID` DESC LIMIT 10");


while($row=mysqli_fetch_array($sql)){
  $num=$row['Customer_ID'];
  $customer=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$num'");
  $rows=mysqli_fetch_array($customer);

?>
<div class="card" style="width:auto;height:auto;border-radius:1px solid black;overflow:hidden;">
&nbsp;&nbsp;Customer_ID:&nbsp;<?php echo $rows['customer_ID']; ?>
<b style="padding-left:12px;">Ratings</b>
<label style="padding-left:14px;"><?php  echo $row['Rate']; ?>
<br>
<b style="padding-left:10px;">Comments</b>
<label style="padding-left:12px;"><?php  echo $row['Comments']; ?>

</div>
<h5></h5>

<?php
}
 
if(mysqli_num_rows($sql)<=0){
  ?>
<h5>NO reviews available</h5>

<?php
}

?>


</div></div>
          </div>
        </div>
        <script>
          productsObj.id4748717817918 = {"id":4748717817918,"title":"Men Gentle Shoes","handle":"men-gentle-shoes","description":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.\u003c\/p\u003e\n\u003cul class=\"unordered-list\"\u003e\n\u003cli\u003eAny Product types that You want - Simple, Configurable\u003c\/li\u003e\n\u003cli\u003eDownloadable\/Digital Products, Virtual Products\u003c\/li\u003e\n\u003cli\u003eInventory Management with Backordered items\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \u003cbr\u003equis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\u003c\/p\u003e","published_at":"2020-10-19T19:35:16+07:00","created_at":"2020-10-19T19:35:13+07:00","vendor":"Porto - Homepage 13","type":"","tags":["$200.00-299.00","BEST SELLING PRODUCTS","Black","Blue","Brown","FEATURED PRODUCTS","Green","L","LATEST PRODUCTS","M","Red","S","SHOES","SHOP","TOP RATED PRODUCTS","TOYS","White","XL","XS","Yellow"],"price":26900,"price_min":26900,"price_max":26900,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":32534165880894,"title":"Small \/ Black","option1":"Small","option2":"Black","option3":null,"sku":"PT0003-2","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Men Gentle Shoes - Small \/ Black","public_title":"Small \/ Black","options":["Small","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":10,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165913662,"title":"Small \/ Brown","option1":"Small","option2":"Brown","option3":null,"sku":"PT0003-3","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Small \/ Brown","public_title":"Small \/ Brown","options":["Small","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165946430,"title":"Small \/ Blue","option1":"Small","option2":"Blue","option3":null,"sku":"PT0003-4","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Small \/ Blue","public_title":"Small \/ Blue","options":["Small","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165979198,"title":"Medium \/ Black","option1":"Medium","option2":"Black","option3":null,"sku":"PT0003-5","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Black","public_title":"Medium \/ Black","options":["Medium","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166011966,"title":"Medium \/ Brown","option1":"Medium","option2":"Brown","option3":null,"sku":"PT0003-6","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Brown","public_title":"Medium \/ Brown","options":["Medium","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166044734,"title":"Medium \/ Blue","option1":"Medium","option2":"Blue","option3":null,"sku":"PT0003-7","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Blue","public_title":"Medium \/ Blue","options":["Medium","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166077502,"title":"Large \/ Black","option1":"Large","option2":"Black","option3":null,"sku":"PT0003-8","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Black","public_title":"Large \/ Black","options":["Large","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166110270,"title":"Large \/ Brown","option1":"Large","option2":"Brown","option3":null,"sku":"PT0003-9","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Brown","public_title":"Large \/ Brown","options":["Large","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166143038,"title":"Large \/ Blue","option1":"Large","option2":"Blue","option3":null,"sku":"PT0003-10","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Blue","public_title":"Large \/ Blue","options":["Large","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166175806,"title":"Extra large \/ Black","option1":"Extra large","option2":"Black","option3":null,"sku":"PT0003-11","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Black","public_title":"Extra large \/ Black","options":["Extra large","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166208574,"title":"Extra large \/ Brown","option1":"Extra large","option2":"Brown","option3":null,"sku":"PT0003-12","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Brown","public_title":"Extra large \/ Brown","options":["Extra large","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166241342,"title":"Extra large \/ Blue","option1":"Extra large","option2":"Blue","option3":null,"sku":"PT0003-13","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Blue","public_title":"Extra large \/ Blue","options":["Extra large","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","options":["Size","Color"],"media":[{"alt":null,"id":8643757604926,"position":1,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","width":600},{"alt":null,"id":8643757637694,"position":2,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918","width":600},{"alt":null,"id":8643757670462,"position":3,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918","width":600},{"alt":null,"id":8643757703230,"position":4,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918","width":600},{"alt":null,"id":8643757735998,"position":5,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918","width":600}],"content":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.\u003c\/p\u003e\n\u003cul class=\"unordered-list\"\u003e\n\u003cli\u003eAny Product types that You want - Simple, Configurable\u003c\/li\u003e\n\u003cli\u003eDownloadable\/Digital Products, Virtual Products\u003c\/li\u003e\n\u003cli\u003eInventory Management with Backordered items\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \u003cbr\u003equis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\u003c\/p\u003e"};
          selectCallback = function(variant, selector) {
            if (variant) {
              if (variant.compare_at_price > variant.price) {
                $("#price").html('<del class="price_compare">' + Shopify.formatMoney(variant.compare_at_price, money_format) + "</del>" + '<div class="price">' + Shopify.formatMoney(variant.price, money_format) + "</div>")
              } else {
                $("#price").html('<div class="price">' + Shopify.formatMoney(variant.price, money_format) + "</div>");
              }
              if (variant.available) { 
                  $(".product-page-area .product-shop .add-to-cart").removeClass("disabled").removeAttr("disabled").children('span').html(window.inventory_text.add_to_cart),
                  variant.inventory_management && variant.inventory_quantity <= 0 ? ($("#selected-variant").html(selector.product.title + " - " + variant.title), $("#backorder").removeClass("hidden")) : $("#backorder").addClass("hidden");
                if (variant.inventory_management!=null) {
                  $(".product-inventory span.in-stock").text(window.inventory_text.in_stock);
                } else {
                  $(".product-inventory span.in-stock").text(window.inventory_text.many_in_stock);
                }
                $('.product-sku span.sku').text(variant.sku);
              }else{
                $("#backorder").addClass("hidden"), $(".product-page-area .add-to-cart").addClass("disabled").attr("disabled", "disabled").children('span').html(window.inventory_text.sold_out);
                $(".product-inventory span.in-stock").text(window.inventory_text.out_of_stock);
                $('.product-sku span.sku').empty();
              }
              if( swatch_color_type == '1' || swatch_color_type == '2' ) {
                var form = $('#' + selector.domIdPrefix).closest('form');
                for (var i=0,length=variant.options.length; i<length; i++) {
                  var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
                  if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                  }
                }
              }
            }
            if (variant && variant.featured_image) {
              var n = Shopify.Image.removeProtocol(variant.featured_image.src);
              $(".product-image-thumbs .thumb-link").filter('[data-zoom-image="' + n + '"]').trigger("mouseenter");
            }
            variant && variant.sku ? $("#sku").removeClass("hidden").find("span").html(variant.sku) : $("#sku").addClass("hidden").find("span").html("");
          };
          convertToSlug= function(e) {
            return e.toLowerCase().replace(/[^a-z0-9 -]/g, "").replace(/\s+/g, "-").replace(/-+/g, "-");
          };
          jQuery(function($) {
            
            var product = {"id":4748717817918,"title":"Men Gentle Shoes","handle":"men-gentle-shoes","description":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.\u003c\/p\u003e\n\u003cul class=\"unordered-list\"\u003e\n\u003cli\u003eAny Product types that You want - Simple, Configurable\u003c\/li\u003e\n\u003cli\u003eDownloadable\/Digital Products, Virtual Products\u003c\/li\u003e\n\u003cli\u003eInventory Management with Backordered items\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \u003cbr\u003equis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\u003c\/p\u003e","published_at":"2020-10-19T19:35:16+07:00","created_at":"2020-10-19T19:35:13+07:00","vendor":"Porto - Homepage 13","type":"","tags":["$200.00-299.00","BEST SELLING PRODUCTS","Black","Blue","Brown","FEATURED PRODUCTS","Green","L","LATEST PRODUCTS","M","Red","S","SHOES","SHOP","TOP RATED PRODUCTS","TOYS","White","XL","XS","Yellow"],"price":26900,"price_min":26900,"price_max":26900,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":32534165880894,"title":"Small \/ Black","option1":"Small","option2":"Black","option3":null,"sku":"PT0003-2","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Men Gentle Shoes - Small \/ Black","public_title":"Small \/ Black","options":["Small","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":10,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165913662,"title":"Small \/ Brown","option1":"Small","option2":"Brown","option3":null,"sku":"PT0003-3","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Small \/ Brown","public_title":"Small \/ Brown","options":["Small","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165946430,"title":"Small \/ Blue","option1":"Small","option2":"Blue","option3":null,"sku":"PT0003-4","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Small \/ Blue","public_title":"Small \/ Blue","options":["Small","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534165979198,"title":"Medium \/ Black","option1":"Medium","option2":"Black","option3":null,"sku":"PT0003-5","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Black","public_title":"Medium \/ Black","options":["Medium","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166011966,"title":"Medium \/ Brown","option1":"Medium","option2":"Brown","option3":null,"sku":"PT0003-6","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Brown","public_title":"Medium \/ Brown","options":["Medium","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166044734,"title":"Medium \/ Blue","option1":"Medium","option2":"Blue","option3":null,"sku":"PT0003-7","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Medium \/ Blue","public_title":"Medium \/ Blue","options":["Medium","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166077502,"title":"Large \/ Black","option1":"Large","option2":"Black","option3":null,"sku":"PT0003-8","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Black","public_title":"Large \/ Black","options":["Large","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166110270,"title":"Large \/ Brown","option1":"Large","option2":"Brown","option3":null,"sku":"PT0003-9","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Brown","public_title":"Large \/ Brown","options":["Large","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166143038,"title":"Large \/ Blue","option1":"Large","option2":"Blue","option3":null,"sku":"PT0003-10","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Large \/ Blue","public_title":"Large \/ Blue","options":["Large","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166175806,"title":"Extra large \/ Black","option1":"Extra large","option2":"Black","option3":null,"sku":"PT0003-11","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Black","public_title":"Extra large \/ Black","options":["Extra large","Black"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166208574,"title":"Extra large \/ Brown","option1":"Extra large","option2":"Brown","option3":null,"sku":"PT0003-12","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Brown","public_title":"Extra large \/ Brown","options":["Extra large","Brown"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""},{"id":32534166241342,"title":"Extra large \/ Blue","option1":"Extra large","option2":"Blue","option3":null,"sku":"PT0003-13","requires_shipping":true,"taxable":true,"featured_image":null,"available":false,"name":"Men Gentle Shoes - Extra large \/ Blue","public_title":"Extra large \/ Blue","options":["Extra large","Blue"],"price":26900,"weight":0,"compare_at_price":null,"inventory_quantity":0,"inventory_management":"shopify","inventory_policy":"deny","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918","\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","options":["Size","Color"],"media":[{"alt":null,"id":8643757604926,"position":1,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes.jpg?v=1603110918","width":600},{"alt":null,"id":8643757637694,"position":2,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes1.jpg?v=1603110918","width":600},{"alt":null,"id":8643757670462,"position":3,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes2.jpg?v=1603110918","width":600},{"alt":null,"id":8643757703230,"position":4,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes3.jpg?v=1603110918","width":600},{"alt":null,"id":8643757735998,"position":5,"preview_image":{"aspect_ratio":1.0,"height":600,"width":600,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918"},"aspect_ratio":1.0,"height":600,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/1613\/0177\/products\/MenGentleShoes4.jpg?v=1603110918","width":600}],"content":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.\u003c\/p\u003e\n\u003cul class=\"unordered-list\"\u003e\n\u003cli\u003eAny Product types that You want - Simple, Configurable\u003c\/li\u003e\n\u003cli\u003eDownloadable\/Digital Products, Virtual Products\u003c\/li\u003e\n\u003cli\u003eInventory Management with Backordered items\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003eSed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, \u003cbr\u003equis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\u003c\/p\u003e"};
            var layout = $('.product-page-area');
            if (product.variants.length >= 1) { //multiple variants
              for (var i = 0; i < product.variants.length; i++) {
                var variant = product.variants[i];
                var option = '<option value="' + variant.id + '">' + variant.title + '</option>';
                layout.find('form.product-form > select').append(option);
              }
              new Shopify.OptionSelectors("product-selectors", {
                product: product,
                onVariantSelected: selectCallback,
                enableHistoryState: true
              });

              //start of quickview variant;
              var filePath = asset_url.substring(0, asset_url.lastIndexOf('/'));
              var assetUrl = asset_url.substring(0, asset_url.lastIndexOf('/'));
              var options = "";
              for (var i = 0; i < product.options.length; i++) {
                options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                options += '<div class="header">' + product.options[i] + ':</div>';
                options += '<div class="variant-items">';
                var is_color = false;
                var is_square = 'square';
                if (/Color|Colour/i.test(product.options[i])) {
                  is_color = true;
                }
                if (swatch_color_type == '2') {
                  is_color = false;
                  is_square = '';
                }
                var optionValues = new Array();
                for (var j = 0; j < product.variants.length; j++) {
                  var variant = product.variants[j];
                  var value = variant.options[i];
                  if(variant.featured_image && product_swatch_setting == '2') {
                    var img = variant.featured_image.src.lastIndexOf(".");
                    var vimg = variant.featured_image.src.slice(0, img) + "_50x50_crop_center" + variant.featured_image.src.slice(img);
                  }
                  var valueHandle = convertToSlug(value);
                  var forText = 'swatch-' + i + '-' + valueHandle;
                  if (optionValues.indexOf(value) < 0) {
                    //not yet inserted
                    options += '<div data-value="' + value + '" class="swatch-element '+is_square+' '+product_swatch_size+' '+(is_color ? "color" : "")+' ' + (is_color ? "color" : "") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';

                    if (is_color) {
                      options += '<div class="tooltip">' + value + '</div>';
                    }
                    options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : ' disabled') + ' />';

                    if (is_color) {
                      if(vimg && product_swatch_setting == '2') {
                        options += '<label for="' + forText + '" class="swatch-image" style="overflow:hidden;"><img src="' + vimg + '" class="variant-image" style="max-width:100%;" /><img class="crossed-out" src="' + assetUrl + 'soldout.png" /></label>';
                      }else{
                        options += '<label for="' + forText + '" style="background-color: ' + valueHandle + '; background-image: url(' + filePath + valueHandle + '.png)"><img class="crossed-out" src="' + assetUrl + 'soldout.png" /></label>';
                      }
                    } else {
                      options += '<label for="' + forText + '">' + value + '<img class="crossed-out" src="' + assetUrl + 'soldout.png" /></label>';
                    }
                    options += '</div>';
                    if (variant.available) {
                      $('.product-page-area .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                    }
                    optionValues.push(value);
                  }
                }
                options += '</div>';
                options += '</div>';
              }
              if(swatch_color_type == '1' || swatch_color_type == '2') {
                layout.find('form.product-form .product-options > select').after(options);
                layout.find('.swatch :radio').change(function() {
                  var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                  var optionValue = $(this).val();
                  $(this)
                  .closest('form')
                  .find('.single-option-selector')
                  .eq(optionIndex)
                  .val(optionValue)
                  .trigger('change');
                });
              }

              if (product.available) {
                Shopify.optionsMap = {};
                Shopify.linkOptionSelectors(product);
              }
              //end of quickview variant
            } else { //single variant
              layout.find('form.product-form .product-options > select').remove();
              var variant_field = '<input type="hidden" name="id" value="' + product.variants[0].id + '">';
              layout.find('form.product-form').append(variant_field);
            }
            
          });
        </script>
      </div>
    </div>
    
   
    </div>
  </div>
</div>
</div>
          </div>



<?php
include('footer.php');
?>