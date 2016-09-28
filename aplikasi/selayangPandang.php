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
	   <div class="row">
		<div class="col-md-12"> <?php include"judul.php"?></div>
	   </div>
	<div class="row">
       <div class="col-md-8">
	   <div class="item-page clearfix">
                <h2 class="contentheading">
                    <a href="/sambutan-bupati.html">
		Sambutan Bupati Kab. Pekalongan</a>
                </h2>


                <div class="article-tools clearfix">
                    <ul class="actions">
                        <li class="print-icon">
                            <a href="/sambutan-bupati.html?tmpl=component&amp;print=1&amp;page=" title="Cetak" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><img src="/templates/ja_purity_ii/images/system/printButton.png" alt="Cetak"></a>
                        </li>

                        <li class="email-icon">
                            <a href="/component/mailto/?tmpl=component&amp;template=ja_purity_ii&amp;link=12b8cb1a37a4794b04c89296a4f676ae84b59326" title="Email" onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;"><img src="/templates/ja_purity_ii/images/system/emailButton.png" alt="Email"></a>
                        </li>



                    </ul>



                    <dl class="article-info">
                        <dt class="article-info-term">Detail</dt>

                        <dd class="hits">
                            Dilihat: <span>23560</span> </dd>
                    </dl>
                </div>
				<p style="text-align: center;"><span style="font-size: 14pt;">Selamat datang di website Resmi</span> <br><span style="font-size: 18pt;"><strong>PEMERINTAH KABUPATEN PEKALONGAN</strong></span></p>
                <p style="text-align: center;"><span style="font-size: 18pt;"><strong><img style="border: 2px solid #000000;" src="/gambar/download.png" alt="sambutan Bupati"></strong></span></p>
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;">&nbsp;</p>
                <p style="text-align: center;">&nbsp;</p>
                <p>&nbsp;</p>


            </div>

	   </div>
       <div class="col-md-4"></div>
    <div class="col-*-*"></div>
  </div>
  <div class="row">
    ...
  </div>
</div>
</body>

</html>