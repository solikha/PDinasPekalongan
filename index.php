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
			<div id="container" >
			<header><img src="gambar/6.jpg"   width="900 px" height="80 px"> Kabupaten Pekalongan</img></header> <!--HTML5 -->
			<nav>
			<ul>
<li><a href="index.htm">Selayang Pandang</a></li>
<li><a href="#">Pemerintahan</a>
</li>
<li><a href="video.html">Deskripsi Wilayah</a></li>
<li><a href="kontak.html">Sosial Budaya</a></li>
<li><a href="#">Insfrastruktur</a></li>
</ul>
</nav> <!--HTML5 -->


<!--
<div id="content">
<?php
while($baris = mysql_fetch_array($query)){
echo "<div id='single'>";
echo "<div id='featured-image' style='background:url($baris[2].jpg)'>&nbsp;</div>";
echo "<h2>baris[1]</h2>";
echo "$baris[3]";
echo "<div id='more'><a href='$baris'>Baca Selengkapnya</a></div>";
echo "</div>";}
?>  -->
<table>
<caption><h3>Dinas - Dinas Kabupaten Pekalongan</h3></caption>
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

 <div id="sidebar">
<li class="widget">
<h2>Popular Post</h2>
<ul>
<li><a href="#">Prasasti Maya Bukan Petunjuk Kiamat</a></li>
<li><a href="#">Asteroid Vesta dalam Video 3D</a></li>
<li><a href="#">Seperlima Gletser Himalaya Mencair</a></li>
</ul>
</li>
<li class="widget">
<h2>Commented Post</h2>
<ul>
<li><a href="#">Prasasti Maya Bukan Petunjuk Kiamat</a></li>
<li><a href="#">Asteroid Vesta dalam Video 3D</a></li>
<li><a href="#">Seperlima Gletser Himalaya Mencair</a></li>
</ul>
</li>
<li class="widget">
<h2>Audio Streaming</h2>
<audio id="audio" src="sounds/sound.mp3" controls></audio>
</li>

</div> 
<footer> <!--HTML5 -->
<div id="column">
<h2>Dapatkan Bantuan dan Dukungan</h2>
Untuk mendapatkan petunjuk atau dukungan dari kami, kunjungi situs <a
href="http://support.directnews.com">support.directnews.com</a> dan submit form
anda.
</div>
<div id="column">
<h2>Hubungi Kami</h2>
Jl. Parikesit 75<br>
Surabaya 66666 Pekalongan<br>
(+6222) 5556667
</div>
<div id="column">
<h2>Temukan Kami di ...</h2>
<a
href="http://facebook.com/directnewsaccess">Facebook</a><br>
<a href="http://twitter.com/directnewsaccess">Twitter</a>
</div>

</footer>
</div>
</div>

	</body>
</html>