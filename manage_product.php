<?php

$db = mysqli_connect("localhost",
"root","","project_inv");


if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<style type="text/css"> 
  table{border:outset 2; 
  	margin-left:auto; 
  	margin-right:auto;
  	width: 80em;
    height: 20em;}

  table td {border:inset 2; 
  			text-align:center;
  			color: #001036;
  			font-weight: bold;}

  			.head{background-color: #00F7DB;
  				font-weight: bolder;
  				font-size: 1.2em;}


  table caption {font-weight:bold;}

  table tr#HEAD {font-weight:bold;
                 text-align:center;
                 background-color:#00B2F7;}
</style>
 </head>
<body style="background-image: url('pro.PNG');">
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	
	<h2 style="text-align:center; color:#F5EEEE; font-size: 3.2em;">Product Details 📺</h2>
<div class = "table" >
<table border="2" bgcolor="#FFFFFF">
  <tr class="head">
    <td>Product ID</td>
    <td>Category ID</td>
    <td>Brand ID</td>
    <td>Product Name</td>
    <td>Product Price</td>
    <td>Product Stock</td>
    <td>Date of Added</td>
    <td>Product Status</td>
  </tr>
</div>
  <?php

include_once("./database/db.php"); // Using database connection file here

$records = mysqli_query($db,"select * from products"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['pid']; ?></td>
    <td><?php echo $data['cid']; ?></td>
    <td><?php echo $data['bid']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_price']; ?></td>
    <td><?php echo $data['product_stock']; ?></td>
    <td><?php echo $data['added_date']; ?></td>
    <td><?php echo $data['p_status']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
</body>
</html>