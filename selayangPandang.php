<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
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
            <div class="col-md-8">
				<div class="panel panel-default">
						<div class="panel-heading">
							<center><p> Selamat Datang Di Website Profil </p> </center>
							<center><h1> Pemerintah Kabupaten Pekalongan </h1> </center>
						</div>
						<div class="panel-body">
							<img src="gambar/1.jpg" class="img-rounded" alt="Cinque Terre" width="700" height="500">
						</div>
				</div>
			</div>
            <!--ISI --->
            <?php include'sidebar.php';?>
            <!--SIDEBAR --->
        </div>
        <!--FOOTER --->
        <div class="row">
            <?php include"footer.php";?>
        </div>
        <!--FOOTER SELESAI --->

    </div>
<!--SELESAI KONTEN --->
</body>

</html>