<?php include("header.php"); ?>
<?php include("cnn.php"); ?>
<div class="page-wrapper">
<form action="formController.php" method="post" enctype="multipart/form-data">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Products</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Products</li>
                                </ol>
                            </nav> 
                        </div>                
                    </div>
  
                <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header modal-colored-header bg-success">
                                                <h4 class="modal-title" id="success-header-modalLabel">Add new Category 
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mt-0"></h5>
                                                <h5></h5>
                                <h4 class="card-title">Add new category</h4>
                                
                                    <div class="form-group">
                                        <input type="text" name="newcategory"  class="form-control" style="border:1px solid black;" placeholder="Type here">
                                    </div>

                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn-newcat" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                               

                                <div class="btn-list" style="padding-left:200px;">
                                    <!-- Primary header modal -->
                                
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#success-header-modal">Add Category</button>
                                    
                                </div>     
</div>
</div>  
         <?php
         if(isset($_POST['product-edit'])){
            $id=$_POST['pid'];      
            $getproducts=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$id' ");
            $row=mysqli_fetch_array($getproducts);
            $id=$row['Product_ID'];
            $name=$row['ProductName'];
            $desc=$row['Description'];
            $status=$row['Status'];
            $img1=$row['Image1'];
            $img2=$row['Image2'];
            $img3=$row['Image3'];
            $color=$row['Color'];
            $size=$row['Size'];
            $brand=$row['Brand'];
            $category=$row['Category'];
            $manadd=$row['Manufacture_add'];
            $price=$row['Price'];
            $comparep=$row['ComparePrice'];
            $cpi=$row['CostPerItem'];


         }
         ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                     <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Name of the product </label>
                                                            <input type="text" name="id" hidden value="<?php echo "$id";?>">
                                                            <input type="text"  name="pname" size="70" class=""  required placeholder="Type here" value="<?php echo "$name";?>">
                                                        </div>
                                                    </div>
                                                    
                                                </div> 
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Description of product <label>
                                                                <form class="mt-3">
                                                                 <div class="form-group">
                                                                    <textarea  rows="7"  name="description" cols="70" placeholder="Type here...." ><?php echo "$desc";?></textarea>
                                                                </div>                                     
                                                        </div>
                                                    </div>                                
                                                </div>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

           <!-- Media  -->
            <!-- ============================================================== -->
                        
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Media</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                     <div class="col-md-3">
                                                     <div class="new" style="padding-left:50px;"> 
                                                     <div class="form-group">
                                                       
                                                            <label for="file-1">
                                                                <input type="text" name="oldimg1" value="<?php echo "$img1";?>" hidden >
                                                                <img height="150px"   src="Images/ProductImages/<?php echo "$img1";?>" id="uploadPreview-1" alt="image" style="border-radius:10px ">
                                                                <h4 >Image-1</h4>                                            
                                                                <input name="image1" type="file"   id="file-1"  accept="image/*" onchange="PreviewImage();" hidden> 

                                                            </div>
                                                    </div>
                                                    </div>
                                                        <div class="new" style="padding-left:60px;"> 
                                                                <div class="form-group">
                                                                <label for="file-2">
                                                                <input type="text" name="oldimg2" value="<?php echo "$img2";?>" hidden  >
                                                                <img height="150px"    src="Images/ProductImages/<?php echo "$img2";?>" id="uploadPreview-2" alt="image" style="border-radius:10px ">
                                                                <h4 >Image-2</h4>                                            
                                                                <input type="file" id="file-2" name="image2"  accept="image/*" onchange="PreviewImagee();" hidden>
                                                                </div>
                                                        </div>
                                                        <div class="new" style="padding-left:100px;"> 
                                                                <div class="form-group">
                                                                <label for="file-3">                                                              
                                                                <input type="text" name="oldimg3" value="<?php echo "$img3";?>" hidden >
                                                                <img height="150px"    src="Images/ProductImages/<?php echo "$img3";?>" id="uploadPreview-3" alt="image" style="border-radius:10px ">
                                                                <h4 >Image-3</h4>                                            
                                                                <input type="file" id="file-3" name="image3" accept="image/*" onchange="PreviewImages();"hidden>
                                                                </div>
                                                        </div>
                                                    </div>                                                                                               
                                                </div>
                                            </div>                                
                                            </div>                                    
                                    </div>
                                </div>
                            </div>
            <!-- General -->
            <!-- ============================================================== --> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Color</label>
                                                    <input type="text"  name="color" style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here" value="<?php echo "$color";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Size(Inch/Liter/Tons Mention)</label>
                                                    <input type="text"  name="size" style="border: 1px solid black;"  class="form-control"  placeholder="Type here" value="<?php echo "$size";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Status</label>
                                                <select name="status" class="form-control" id="exampleFormControlSelect1" >
                                                   <option> <?php echo "$status";?></option>
                                                    <option>Active</option>
                                                    <option>De-Active</option>                                                    
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <input type="text"   name="brand" style="border: 1px solid black;" class="form-control"  placeholder="Type here" value="<?php echo "$brand";?>">                                        
                                                   </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label  for="exampleFormControlSelect1">Category</label>
                                                    <select  name="category" style="border: 1px solid black;" class="form-control" id="exampleFormControlSelect1" value="<?php echo "$category";?>">
                                                    <option> <?php echo "$category";?></option>

                                                   <?php
                                                    include "cnn.php";
                                                    $result=mysqli_query($conn,"SELECT * FROM `category`");
                                                    while($row=mysqli_fetch_array($result)){                                                  
                                                    ?>
                                             
                                            <option><?php echo $row["CategoryName"];?></option>
                                          <?php
                                                    }
                                                    ?>
                                        </select>
                                    </div>

                                                   </div>
                                            </div>
                                    </div> 
                                    <div class="row">
                                    <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Manufacturer address</label>
                                                    <textarea  name="manufactureAddress" style="border: 1px solid black;" rows="7" cols="40" placeholder="Type here...." ><?php echo "$manadd";?></textarea>
                                                   </div>
                                            </div>                               
                                                </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 <!-- Pricing  -->
            <!-- ============================================================== -->              
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pricing</h4>
                                    <div class="card-body">
                                            <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Price(eg:2000)</label>
                                                    <input type="number"  name="price"  required style="border: 1px solid black;" size="50" class="form-control"  placeholder="Type here" value="<?php echo "$price";?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Compare at price(eg:<s>3000</s>)</label>
                                                    <input type="number"  name="comparePrice" style="border: 1px solid black;"  class="form-control"  placeholder="Type here" value="<?php echo "$comparep";?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cost per item</label>
                                                    <input type="number"  name="CostPerItem"  style="border: 1px solid black;" class="form-control"  placeholder="Type here" value="<?php echo "$cpi";?>">
                                                    <h6>Customer won't see this</h6>                                            
                                                   </div>
                                            </div>
                                    </div>                                
                                                </div> 
                                                <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit"  name="update-product" class="btn btn-success">Save Changes</button>
                                            <button type="reset" class="btn btn-dark" onchange="clear_fetch();"; >Reset</button>
                                        </div>
                                    </div>                                    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <script type="text/javascript">

function PreviewImage() {
    var oFReader = new FileReader();
  
    oFReader.readAsDataURL(document.getElementById("file-1").files[0]);
  

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview-1").src = oFREvent.target.result;

    };
};

function PreviewImagee() {
    var oFReader = new FileReader();
  
    oFReader.readAsDataURL(document.getElementById("file-2").files[0]);
  

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview-2").src = oFREvent.target.result;

    };
};

function PreviewImages() {
    var oFReader = new FileReader();
  
    oFReader.readAsDataURL(document.getElementById("file-3").files[0]);
  

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview-3").src = oFREvent.target.result;

    };
};

function clear_fetch() {    

$('#fetch_results:input', $(this)).each(function(index) {
  this.value = "";
})

}

</script>
<?php include("footer.php"); ?>