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

        <!--HEADER/JUDUL --->
        <div class="row">
            <div class="col-md-12">
                <?php include'judul.php';?>
            </div>
        </div>
        <!--HEADER/JUDUL SELESAI --->

        <!--BAGIAN KONTEN --->
        <div class="row">
            <div class="col-md-8"></div>
            <!--ISI --->
            <div class="col-md-12"></div>
            <!--SIDEBAR --->
        </div>
        <!--FOOTER --->
        <div class="row">
            ...
        </div>
        <!--FOOTER SELESAI --->

    </div>
<!--SELESAI KONTEN --->
</body>

</html>