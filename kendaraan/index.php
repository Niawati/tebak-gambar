<?php
include "jawaban.php";
?>
<!doctype html>
<html lang="id">
  <head>
<meta charset="utf-8">
<meta name="keywords" content="Game Belajar Bahasa Inggris"/>
<link rel="publisher" href="https://plus.google.com/u/0/1017573254021628674266"/>
<meta property="og:locale" content="id_ID" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Game Belajar Bahasa Inggris Online Untuk Pemula" />
<meta property="og:description" content="Game Belajar Bahasa Inggris Online Untuk Pemula" />
<meta property="og:url" content="http://www.tebakgambar.hol.es" />
<meta property="og:site_name" content="Game Belajar Bahasa Inggris" />
<meta property="article:publisher" content="https://www.facebook.com/matori.muhammad.5" />
<meta property="article:author" content="https://www.facebook.com/matori.muhammad.5" />
<meta property="article:tag" content="Game Belajar Bahasa Inggris" />
<meta property="article:tag" content="http://www.tebakgambar.hol.es" />
<meta property="fb:admins" content="matori.muhammad.5" />
<meta content="id" name="language"/>
<meta content="id" name="geo.country"/>
<meta content="Indonesia" name="geo.placename"/>
	<title>TEBAK GAMBAR</title>
 <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
  <script src="ajax/jquery.min.js"></script>
  <script src="/dist/js/bootstrap.min.js"></script>
			<link rel="shortcut icon" href="favicon.png">
</head>


<div style="position: relative; width: 100%">
<center>
<div class="navbar">
<a class="barlink" href="/">Home</a>
<a class="barlink" href="/tentang.php">About Us</a>
<a class="barlink" href="/contact.php">Contact Us</a>
<a class="barlink" href="/privacy.php">Privacy Policy</a>
<a class="barlink" href="/disclaimer.php">Disclaimer</a>
<a class="barlink" href="/term.php">Term of Us</a>
</div>

<body>
<h1><a href="/">TebakGambar.hol.es</a></h1>

<h3 align="center">Kategori <?php echo $f2; ?></h3>
<p>Anda harus menyelesaikan <b>Level 1</b> dulu Sebelum ke <b>Level 2</b></p>
<center><img src="../gambar/<?php echo "$f/$i10"; ?>.jpg"  width="175" height="125" class="img-responsive" /></center>
<table align="center" >
<tr>
<td>
<center><a href="belajar/index.php">
<input type="submit" value="BELAJAR" id="tombol" class="btn btn-primary" /></a></center>
</td>
</tr>

<tr>
<td><center><a href="level1"><input type="submit" value="LEVEL 1" class="btn btn-primary" /></a></center></td>
</tr>

<tr>
<td><center><a href="level2"><input type="submit" value="LEVEL 2" class="btn btn-primary" /></a></center></td>
</tr>

<tr>
	<td><br></td>
</tr>

</table>
<?php
include "../pengaturan/footer.html";
?>
