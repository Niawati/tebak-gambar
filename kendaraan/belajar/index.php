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
 <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
  <script src="/ajax/jquery.min.js"></script>
  <script src="/dist/js/bootstrap.min.js"></script>
			<link rel="shortcut icon" href="/favicon.png">
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

<?php
include "../jawaban.php";
include "pilihanbelajar.php";
?>

<body>
<form align="center" method="POST">
<h1><a href="/">TebakGambar.hol.es</a></h1>
<h3>Belajar Dulu</h3>
<p>Dibagian ini anda akan mempelajari 10 nama <?php echo $f; ?> dengan bahasa Inggris.</p>
 <p>Namun jika anda ingin langsung memulai game bisa klik link <b>Mulai Permainan</b></p>


<?php
pilihan1();
?>

<br>
	<center><a title="Lanjut"  href="2.php" class="btn btn-primary">LANJUT</a></center>
	<br>

	
<?php include "../../pengaturan/footer.html"; ?>