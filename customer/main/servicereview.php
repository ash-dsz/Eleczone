<?php  include('header.php'); ?>


<h5></h5>
<?php

$id=$_SESSION['user'];
$status="Confirm";
$sql=mysqli_query($conn,"SELECT * FROM `servicerequests` WHERE `ContactNo`='$id' AND Status='$status'");
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
        <h5 class="mb-0">Feedback about service</h5>
      </div>
      <div class="card-body">
        <form action="controls.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="serviceid" value="<?php echo $value['Service_ID']; ?>" hidden>
                <input type="text" name="name" readonly value="<?php echo $value['Name']; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">First name</label>
              </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text" name="productname" readonly value="<?php echo $value['ProductName']; ?>" id="form7Example1" class="form-control" required />
                <label class="form-label" for="form7Example1">Product Name</label>
              </div>

            </div>
          </div>

    
          <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <input type="text" name="issuetitle" readonly value="<?php echo $value['IssueTitle']; ?>"  id="form7Example2" class="form-control" required />
                <label class="form-label" for="form7Example2">Issue Title</label>
              </div>
            </div>
            <div class="col">
            <select  name="rating" style="border: 1px solid black;" class="form-control"  id="exampleFormControlSelect1" >       
                                            <option>Very Good</option>
                                            <option>Good</option>
                                            <option>Average</option>
                                            <option>Bad</option>
                                            <option>Very Bad</option>

                                        
                                        </select>
                                        Rate
            </div>
          </div>

                                      
                                      <h5></h5>
                                       Any suggestions
                                        <textarea name="comments" placeholder="Type here" ></textarea>
                                    </div>






          

          <input type="submit" style="background-color:orange;"  name="confirm" class="form-control" value="Verify Service">
          <h5></h5>

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


<?php include('footer2.php'); ?>)