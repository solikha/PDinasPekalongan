<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.min.css">
	
	
	
</head>
<?php
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("latihan1", $koneksi);
	
	$query = mysql_query("select * from berita",$koneksi);
	?>
	<body>
	 <div class="container">
	   <div class="row">
		<div class="col-md-12"> <?php include"judul.php"?></div>
	   </div>
	<div class="row">
       <div class="col-md-8"></div>
       <div class="col-md-4"></div>
    <div class="col-*-*"></div>
  </div>
  <div class="row">
    ...
  </div>
</div>
</body>
</html>