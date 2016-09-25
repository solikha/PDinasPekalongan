<?php
	$koneksi = mysql_connect("localhost","root","");
	mysql_select_db("latihan1", $koneksi);
	
	$query = mysql_query("select * from berita",$koneksi);
	?>

<html>
	<head>
		<link rel="stylesheet" href="assets/style.css" type="text/css">
		<link rel="stylesheet" href="gambar/style.css" type="text/css">
		<title>latihan1></title>
	</head>
	<body>
	 <div id="wrapper">
			<div id="container">
			<header><center>Profil Dinas Kabupaten Pekalongan</center></header> <!--HTML5 -->
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
<caption><h3>Dinas Kabupaten Pekalongan</h3></caption>
    <tr>
        <th>Header Kolom 1</th>
        <th>Header Kolom 2</th>
        <th>Header Kolom 3</th>
		<th>Header Kolom 3</th>
		<th>Header Kolom 3</th>
    </tr>
    <tr>
        <td>Data Cell</td>
        <td>Data Cell</td>
        <td>Data Cell</td>
		<td>Data Cell</td>
        <td>Data Cell</td>

    </tr>
    <tr>
        <td>Data Cell</td>
        <td>Data Cell</td>
        <td>Data Cell</td>
		<td>Data Cell</td>
        <td>Data Cell</td>

    </tr>
	
</table>


 <!--  <div id="single">
<div id="featured-image"
style="background:url(5.jpg)">&nbsp;</div>
<h2>Asteroid Vesta dalam Video 3D</h2>
PASADENA, KOMPAS.com - Asteroid Vesta adalah salah satu asteroid terbesar
di Tata Surya. Diameter asteroid ini mencapai 530 km. Asteroid ini ditemukan oleh
Heinrich Wilhelm Olbers pada 29 Maret 1807. Penasaran seperti apa rupa asteroid
Vesta? NASA telah memproduksi citra yang menyuguhkan rupa asteroid Vesta dalam
versi 3D. Citra tersebut diambil oleh wahana antariksa [...]
<div id="more"><a href="#">Baca Selengkapnya</a></div>
</div>
</div>  -->
<!-- <div id="sidebar">
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

</div> -->
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