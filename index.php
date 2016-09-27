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
<?php include"aplikasi/header.php"; ?>

<!--bagian navigasi -->
<?php include"aplikasi/navigasi.php"; ?>

<!--bagian konten -->
<div id="menu-content">
<div id="menu">
<div id="ul">
<ul>
<li> Lembaga Legislative </li>
<li> Lembaga Eksekutive </li>
<li> Strukture Organisasi</li>
<li> Profil Kecamatan </li>
</ul>
</div>
</div> <!--konten 1 -->
<div id="content"> 
<div id="table">
<table>
  <tr style="height: 25.5pt;">
        <th >No</th>
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
        <td><a href = "google.com" >klik disini <a></td>
		

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
</div><!-- konten 2 -->
</div>

<!--bagian footer -->
<div id="footer">
<footer> 
<div id="column">

</div>
<div id="column">

</div>
<div id="column">

</div>
</div>
</footer>
</div>
</div>
	</body>
</html>