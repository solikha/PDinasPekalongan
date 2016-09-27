
<?php
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("latihan1", $koneksi);
	
	$query = mysql_query("select * from berita",$koneksi);
	?>

<html>
	<head>
		<link rel="stylesheet" href="assets/style.css"  type="text/css">
		<title>latihan1></title>
	</head>
	<body>
	 <div id="wrapper">
		<div id="container">
		<!--bagian header -->
		<?php include"header.php"; ?>
		<!--bagian navigasi -->
		<?php include"navigasi.php"; ?>
		<!--bagian konten -->


		<!--bagian footer -->
		<footer> 

		</footer>
	</div>
	</div>
</body>
</html>