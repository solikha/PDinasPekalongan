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
						<div class="panel-body">
							<h1>Kondisi Umum Geografis</h1>
							<p>Letak Geografis </p>Kabupaten Pekalongan merupakan salah satu dari 35 Kabupaten/Kota di Propinsi Jawa Tengah, yang berada di daerah Pantura bagian barat sepanjang pantai utara Laut Jawa memanjang ke selatan dengan Kota Kajen sebagai Ibu Kota pusat pemerintahan.Secara geografis terletak diantara: 6° - 7° 23’ Lintang Selatan dan antara 109° - 109° 78’ Bujur Timur yang berbatasan dengan:
													<p> <ul>
														<li>Sebelah Timur    : Kota Pekalongan dan Kabupaten Batang  </li>
														<li>Sebelah Utara    : Laut Jawa, Kota Pekalongan </li>
														<li>Sebelah Selatan : Kabupaten Banjarnegara</li>
														<li>Sebelah Barat    : Kabupaten Pemalang</li>
														<ul>
													</p>
							<p>Secara Topografis</p> Kabupaten Pekalongan merupakan perpaduan antara wilayah datar diwilayah bagian utara dan sebagian merupakan wilayah dataran tinggi/pegunungan diwilayah bagian selatan yaitu diantaranya Kecamatan Petungkriyono dengan ketinggian 1.294 meter diatas permukaan laut dan merupakan wilayah perbatasan dengan Kabupaten Banjarnegara, Kecamatan Lebakbarang, Paninggaran, Kandangserang, Talun, Doro, dan sebagian diwilayah Kecamatan Karanganyar serta Kajen.		

							<p>Iklim</p>Curah hujan pada tahun 2013 rata-rata per tahun 2.992 mm, lebih tinggi dibandingkan tahun 2012 yang mengalami curah hujan 2.243 mm. Rata-rata hari hujan tahun 2013 adalah 143 hari, lebih tinggi dibandingkan rata-rata hari hujan tahun 2012 sebesar 120 hari. Curah hujan tertinggi terjadi di Kecamatan Lebakbarang rata-rata per tahun 5.321 mm, terendah Kecamatan Buaran rata-rata per tahun 873 mm

							Rata-rata hari hujan terbanyak terjadi di Kecamatan Talun yaitu sebesar 196 hari, sedangkan rata-rata hari hujan terendah terjadi di Kecamatan Wiradesa yaitu sebesar 76 hari. 
									
							<p>Kondisi Geografis</p>Kondisi tanah berdasarkan luas daerah Kabupaten Pekalongan ± 836,13 km2 yang terdiri atas tanah sawah 24.871,51 ha atau 29,75%, tanah kering 58.741,56 ha (70,25%).Luas areal lahan sawah di Kabupaten Pekalongan pada tahun 2013 seluruhnya seluas 24.871,51 ha, yang terdiri dari :
									<ol>
									<li>Sawah berpengairan teknis seluas 19.930,67 ha </li>
									<li>Sawah tadah hujan seluas 4.286,54 ha </li>
									<li>Sawah pasang surut seluas 393,11 ha </li>
									<li>Lebak seluas 261,18 ha </li> </ol>
									<ol>
									<p>Lahan bukan sawah seluas 58.741,56 ha yang terdiri dari :  </p>
									<li>Tanah Tegalan/kebun seluas 9.926,28 ha  </li>
									<li>Ladang/Huma seluas 385 ha </li>
									<li>Perkebunan seluas 3.385,37 ha </li>
									<li>Hutan rakyat seluas 2930,81 ha </li>
									<li>Padang penggembalaan/rumput seluas 152,17 ha </li>
									<li>Sementara tidak diusahakan 52,13 ha</li>
									<li>Tambak/kolam/empang dan hutan negara seluas 12.820,72 ha</li>
									<li>Lain-lain seluas 29.088,22 ha.</li>
									</ol>
									
							</p>
						</div>
					   </div>
			</div>
            <!--ISI --->
            <?php include'sidebar.php';?>
            <!--SIDEBAR --->
        </div>
        <!--FOOTER --->
        <div class="row">
           <?php include'footer.php';?>
        </div>
        <!--FOOTER SELESAI --->

    </div>
</body>
</html>