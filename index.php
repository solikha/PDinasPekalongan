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
    <div class="row">
        <div class="col-md-12">
		  <?php include'aplikasi/judul.php';?>
		</div>
    </div>
    <div class="row">
        <div class="col-md-4">
		<ul  class="list-group">
			<li class="list-group-item" > <img src="/gambar/5.jpg" alt="Stop kekerasan anak"> </li>
			<li class="list-group-item"> Lembaga Eksekutive </li>
			<li class="list-group-item"> Strukture Organisasi</li>
			<li class="list-group-item"> Profil Kecamatan </li>
			<li class="list-group-item"> Lembaga Legislative </li>
			<li class="list-group-item"> Lembaga Eksekutive </li>
			<li class="list-group-item"> Strukture Organisasi</li>
			<li class="list-group-item"> Profil Kecamatan </li>
		</ul>
		</div>
        <div class="col-md-8">
			<table  class="table table-bordered">
                        <tr style="height: 10.5pt;">
                            <th>No</th>
                            <th>Dinas</th>
                            <th>Nama Kepala</th>
                            <th>Alamat/Tlp</th>
                            <th>Badan Organisasi</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Dinas Pendidikan dan Kebudayaan</td>
                            <td>Dra. Sri Sugiarti (PLT Kepala)</td>
                            <td>Jl. Sumbing No.3 Kajen Telp. (0285) 382 037, 7908 539</td>
                            <td><a href="google.com">klik disini <a></td>
		

    </tr>
    <tr>
        <td>2.</td>
        <td>Dinas Pekerjaan Umum</td>
        <td>Wiryo Santoso, SIP, MH. (PLT Kepala)</td>
		<td>Jl. Bahurekso No. 1 KajenTelp. (0285) 381710</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>3.</td>
        <td>Dinas Pengelolaan Sumber Daya Air, Energi, dan Sumber Daya Mineral</td>
        <td>Ir. Bambang Pramukanto, M.Si</td>
		<td>Jl. Raya Sragi 505 PekalonganTelp.(0285) 447 5135</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>4.</td>
        <td>Dinas Kesehatan</td>
        <td>dr. Sutanto Setiabudi, M. Kes</td>
		<td>Jl. Rinjani No. 2 Kajen Telp.(0285) 381774</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>5.</td>
        <td>Dinas Pendapatan dan Pengelolan Keuangan Daerah</td>
        <td>Totok Budi Mulyanto, SE</td>
		<td>Jl. Sindoro No. 1 Kajen Telp. (0285) 381775</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	<tr>
        <td>6.</td>
        <td>Dinas Kependudukan & Pencatatan Sipil</td>
        <td>Risnoto, SH, M.Si</td>
		<td>Jl. Sindoro No. 5 Kajen</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>7.</td>
        <td>Dinas Perindustrian, Perdagangan, Koperasi dan Usaha Mikro, Kecil dan </td>
        <td>Ir. Teguh Isdaryanto, MM</td>
		<td>Jl. Mayjend Sutoyo S. No.62 Wiradesa PekalonganTelp. (0285) 4417 233</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>8.</td>
        <td>Dinas Kelautan, Perikanan dan Peternakan</td>
        <td>Ir. Siswanto</td>
		<td>Jl. Wiroto No.9 WiradesaTelp./Fax. (0285) 4416626</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>9.</td>
        <td>Dinas Pertanian, Perkebunan dan Kehutanan</td>
        <td>Ir. Sumarno, M.Pi</td>
		<td>Jl. Sindoro No. 2 Kajen</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>10.</td>
        <td>Dinas Sosial, Tenaga Kerja dan Transmigrasi</td>
        <td>Muhammad Afib, S.Sos</td>
		<td>Jl. Krakatau No. 4 KajenTelp. (0285) 381 506</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>11.</td>
        <td>Dinas Perhubungan, Komunikasi dan Informatika</td>
        <td>Drs. Achmad Muchlisin</td>
		<td>Jl. Sindoro No.4 KajenTelp. (0285) 381776</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
	 <tr>
        <td>12.</td>
        <td>Dinas Pemuda, Olahraga dan Pariwisata</td>
        <td>Fuadi Jaman, AP. (PLT Kepala)</td>
		<td>Jl. Teuku Umar KajenTelp. (0285) 381 783</td>
        <td><a href = "google.com" >klik disini <a></td>
		

    </tr>
</table>
		
		</div>
        
    </div>
    <div class="row">
		HEADER
    </div>
</div>
</body>
</html>