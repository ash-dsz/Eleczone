<?php 

$invoice_no=$_GET['id'];

$data="http://localhost/eleczone/customer/main/service.php?id={$invoice_no}";
$width='700';	
$height='250';
$url="https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}"	;
$out['img'] =$url;
?> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php if(isset($out)){
		?>
		<div class="mb-3">
			<img src="<?php echo $out['img'] ?>" alt="QR Code" width="100%" height="100%">
			<center><a class="btn btn-primary mt-3" href="<?php echo $out['img'] ?>" download="QR code">Download</a></center>
		</div>
		 <?php
	} ?>