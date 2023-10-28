<?php
include('cnn.php');
		$id=$_GET['invoice'];

     $sql=mysqli_query($conn,"SELECT * FROM `neworders` WHERE `InvoiceNo`='$id'");
     $row1=mysqli_fetch_array($sql);
     $pid=$row1['Product_ID'];
     $cid=$row1['Customer_ID'];
     $product=mysqli_query($conn,"SELECT * FROM `products` WHERE `Product_ID`='$pid'");
     $row2=mysqli_fetch_array($product);
     $customer=mysqli_query($conn,"SELECT * FROM `customer` WHERE `MobileNo`='$cid'");
     $row3=mysqli_fetch_array($customer);

      
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eleczone</title>
</head>
<body onload="window.print()">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Eleczone</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">####</p>
                        <p class="text-white">####</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: <?php echo $id; ?></h2>
                    <p class="sub-heading">Order Date: <?php echo $row1['orderdate']; ?> </p>
                    <p class="sub-heading">Email Address: <?php echo $row3['Email']; ?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:<?php echo $row3['Name']; ?>   </p>
                    <p class="sub-heading">Address: <?php echo $row3['Address2']; ?>  </p>
                    <p class="sub-heading">Phone Number:+91 <?php echo $row3['MobileNo']; ?>   </p>
                    <p class="sub-heading"><?php echo $row3['City']; ?> ,<?php echo $row3['State']; ?>,<?php echo $row3['Pincode']; ?>  </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row2['ProductName']; ?></td>
                        <td><?php echo $row2['Price']; ?></td>
                        <td><?php echo $row1['Qty']; ?></td>
                        <td><?php echo $row1['Price']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td><?php echo $row1['Price']; ?></td>
                    </tr>
                    <!--<tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 0.0</td>
                    </tr>-->
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> <?php echo $row1['Price']; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Online Payment</h3>
        </div>

        <div class="body-section">
          <!--   <p>&copy; Copyright 2021 - Fabcart. All rights reserved. 
                <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a> -->
            </p>
        </div>      
    </div>      

</body>
</html>


</body>
</html>