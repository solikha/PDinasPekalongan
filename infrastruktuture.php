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
                        <div class="row">
                            <p>Lembaga Legislatif</p>
                        </div>
                        <form>
                            <input class="search" type="text" placeholder="Cari..." required>
                            <input class="button" type="button" value="Cari">
                        </form>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
									<th>Hits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="http://www.pekalongankab.go.id/perhubungan-darat/6346-perhubungan-darat-tahun-2013.html">Perhubungan Darat Tahun 2013 </a></td>
                                    <td>05-03-2015</td>
                                    <td>573</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Perhubungan Darat Tahun 2012</a></td>
                                    <td>09-06-2014</td>
                                    <td>738</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Perhubungan Darat Tahun 2011</a></td>
                                    <td>15-09-2012</td>
                                    <td>1091</td>
                                </tr>
								<tr>
                                    <td><a href="#">Profil Perhubungan Darat Tahun 2010</a></td>
                                    <td>06-12-2011</td>
                                    <td>1611</td>
                                </tr>
								<tr>
                                    <td><a href="#">Profil Perhubungan Darat Tahun 2017</a></td>
                                    <td>03-08-2006</td>
                                    <td>4049</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div
			
			
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