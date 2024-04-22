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
  table{border:outset 1; 
  	margin-left:auto; 
  	margin-right:auto;
  	width: 35em;
  	height: 33em;}

  table td {border:inset 1; 
  			text-align:center;
  			color: #001036;
  			font-weight: bold;}

  			.head{background-color: #DE60FF;
  				font-weight: bolder;
  				font-size: 1.2em;}


  table caption {font-weight:bold;}

  table tr#HEAD {font-weight:bold;
                 text-align:center;
                 background-color:#F0F0F0;}
</style>
 </head>
<body style="background-image: url('brand.PNG');">
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	
	<h2 style="text-align:center; color:#F5EEEE; font-size: 3em;">Brand Details 🏆</h2><br>
<div class = "table" >
<table border="2" bgcolor="#53EE67">
  <tr class="head">
    <td>Brand ID</td>
    <td>Brand Name</td>
    <td>Status</td>
  </tr>
</div>
  <?php

include_once("./database/db.php"); // Using database connection file here

$records = mysqli_query($db,"select * from brands"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['bid']; ?></td>
    <td><?php echo $data['brand_name']; ?></td>
    <td><?php echo $data['status']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>
</body>
</html>