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
	 <div id="wrapper">
		<div id="container">
		<!--bagian header -->
		<?php include'header.php'; ?>
				<!--bagian konten -->


		<!--bagian footer -->
		<footer> 

		</footer>
	</div>
	</div>
</body>
</html>