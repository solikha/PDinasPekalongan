<?php 
include 'aplikasi/index.php';
?>
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
<div id="header">
<div id="h1">
<header>KABUPATEN PEKALONGAN</header> 
<h2> <marquee  style="background-color: green;">DINAS DINAS KABUPATEN PEKALONGAN </marquee></h2>
</div>
</div>

<!--bagian navigasi -->
<div id="nav">
<nav> 
<ul>
<li><a href="index.html">Selayang Pandang</a></li>
<li><a href="#">Pemerintahan</a></li>
<li><a href="video.html">Deskripsi Wilayah</a></li>
<li><a href="kontak.html">Sosial Budaya</a></li>
<li><a href="#">Insfrastruktur</a></li>
</ul>
</nav>
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
</footer>
	</body>
</html>