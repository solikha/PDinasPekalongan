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
							 <form>
								<input class="search" type="text" placeholder="Cari...">
								<input class="button" type="button" value="Cari">
							</form>
						</div>
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th>Judul </th>
										<th>Tanggal </th>
										<th>Hits</th
										</thead>
									<tr>
								<tbody>	
									<tr>
										<td><a href="#">Angka Partisipasi Sekolah (APS)</a></td>
										<td>25-07-2016</td>
										<td>51</td>
									</tr>
									<tr>
										<td><a href="#">Angka Partisipasi Murni (apm)</a></td>
										<td>25-07-2016 </td>
										<td> 38</td>
									</tr>
									<tr>
										<td><a href="#">Angka Partisipasi Kasar (APK)</a></td>
										<td>25-07-2016</td>
										<td>42</td>
									</tr>
									<tr>
										<td><a href="#">9 Tips Sukses Menghadapi Ujian Nasional </a></td>
										<td>29-03-2016	</td>
										<td>158</td>
									</tr>
									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2013 </a></td>
										<td>05-03-2015	</td>
										<td>682</td>
									</tr>

									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2011</a></td>
										<td> 12-09-2012		</td>
										<td> 2510</td>
									</tr>
									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2010</td>
										<td> 06-12-2011	</td>
										<td> 1897</td>
									</tr>

									<tr>
										<td><a href="#"> Data SMA NEGRI DAN SWASTA 2010/2011</td>
										<td> 16-11-2011	 </td>
										<td> 7698</td>
									</tr>
									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2009</td>
										<td> 18-08-2010	</td>
										<td> 1334</td>
									</tr>
									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2004/2005</td>
										<td> 03-08-2006	</td>
										<td> 1250</td>
									</tr>
									<tr>
										<td><a href="#"> Profil Pendidikan Tahun 2006/2007</td>
										<td> 03-08-2006	</td>
										<td> 3770</td>
									</tr>
								</tbody>
							</table>
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
</body>
</html>