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
                                    <td><a href="http://www.pekalongankab.go.id/lembaga-legislatif/5890-susunan-pimpinan-dan-anggota-badan-kehormatan-dprd-kabupaten-pekalongan.html">Susunan Pimpinan Dan Anggota Badan Kehormatan DPRD </a></td>
                                    <td>05-11-2014	</td>
                                    <td>808</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Susunan Badan Keanggotaan Legislatif Daerah DPRD </a></td>
                                    <td>05-11-2014	</td>
                                    <td>569</td>
                                </tr>
                                <tr>
                                    <td><a href="#">Susunan Pimpinan Dan Anggota Musyawarah</a></td>
                                    <td>05-11-2014	</td>
                                    <td>537</td>
                                </tr>
								<tr>
                                    <td><a href="#">Keputusan DPRD Kabupaten Pembentuk Badan Anggaran</a></td>
                                    <td>05-11-2014	</td>
                                    <td>464</td>
                                </tr>
								<tr>
                                    <td><a href="#">Pembentukan Komisi Komisi Dewan Perwakilan Rakyat Periode 2014/2019</a></td>
                                    <td>05-11-2014</td>
                                    <td>684</td>
                                </tr>
								<tr>
                                    <td><a href="#">Susunan Pimpinan Dan Anggota  Fraksi Fraksi DPRD</a></td>
                                    <td>05-11-2014	</td>
                                    <td>2154</td>
                                </tr>
								<tr>
                                    <td><a href="#">Fraksi Fraksi DPRD</a></td>
                                    <td>15-09-2012</td>
                                    <td>	1621</td>
                                </tr>
								<tr>
                                    <td><a href="#">Komisi D DPRD 2009/2014</a></td>
                                    <td>07-07-2010	</td>
                                    <td>4934</td>
                                </tr>
								<tr>
                                    <td><a href="#">Komisi C DPRD 2009/2014</a></td>
                                    <td>07-07-2010	</td>
                                    <td>3302</td>
                                </tr>
								<tr>
                                    <td><a href="#">Komisi B DPRD 2009/2014</a></td>
                                    <td>07-07-2010	</td>
                                    <td>3350</td>
                                </tr>
								<tr>
                                    <td><a href="#">Komisi A DPRD 2009/2014</a></td>
                                    <td><a href="">07-07-2010	</td>
                                    <td>3019</td>
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
</body></html>