<?php
include "../jawaban.php";
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];
$nilai4 = $_SESSION['nilai4'];
$nilai5 = $_SESSION['nilai5'];
$nilai6 = $_SESSION['nilai6'];
$nilai7 = $_SESSION['nilai7'];
$nilai8 = $_SESSION['nilai8'];
$nilai9 = $_SESSION['nilai9'];
$nilai10 = $_SESSION['nilai10'];

//jika di nomer 11 langsung tanpa melewati nomer 10 maka akan balik lagi
switch ($nilai10) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris10.php');		
		break;
}
include "../jawaban.php";
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
 <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
  <script src="ajax/jquery.min.js"></script>
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

<body>
<h1><a href="/">TebakGambar.hol.es</a></h1>

<h3 align="center">Jumlah Poin Kategori <?php echo $f2; ?> Anda Adalah</h3>
<?php
//filter 


$hasil = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9 + $nilai10;
?>
<h1 align="center"><?php echo "$hasil"; ?></h1>

<?php
switch ($hasil) {
	case '100':
	echo "<p class='bg-info'>Nilai Poin Anda <b>SANGAT BAIK</b></p>";
	break;

	case '90':
	echo "<p class='bg-info'>Nilai Poin Anda <b>Baik</b></p>";
	break;

	case '80':
	echo "<p class='bg-info'>Nilai Poin Anda <b>Cukup</b></p>";
	break;
	
	default:
echo "<p class='bg-danger'>Anda belum mendapatkan Nilai Poin 80 maka anda harus ulangi level 1</p>";
		break;
}

echo "<center><p>Akumulasi Poin Anda</p></center>";

if ($nilai1 == 10) {
	echo "<p class='text-info'>1. Benar</p>";
}else {
	echo "<p class='text-danger'>1. Salah</p>";
}

if ($nilai2 == 10) {
	echo "<p class='text-info'>2. Benar</p>";
}else {
	echo "<p class='text-danger'>2. Salah</p>";
}


if ($nilai3 == 10) {
	echo "<p class='text-info'>3. Benar</p>";
}else {
	echo "<p class='text-danger'>3. Salah</p>";
}


if ($nilai4 == 10) {
	echo "<p class='text-info'>4. Benar</p>";
}else {
	echo "<p class='text-danger'>4. Salah</p>";
}

if ($nilai5 == 10) {
	echo "<p class='text-info'>5. Benar</p>";
}else {
	echo "<p class='text-danger'>5. Salah</p>";
}

if ($nilai6 == 10) {
	echo "<p class='text-info'>6. Benar</p>";
}else {
	echo "<p class='text-danger'>6. Salah</p>";
}

if ($nilai7 == 10) {
	echo "<p class='text-info'>7. Benar</p>";
}else {
	echo "<p class='text-danger'>7. Salah</p>";
}

if ($nilai8 == 10) {
	echo "<p class='text-info'>8. Benar</p>";
}else {
	echo "<p class='text-danger'>8. Salah</p>";
}

if ($nilai9 == 10) {
	echo "<p class='text-info'>9. Benar</p>";
}else {
	echo "<p class='text-danger'>9. Salah</p>";
}

if ($nilai10 == 10) {
	echo "<p class='text-info'>10. Benar</p>";
}else {
	echo "<p class='text-danger'>10. Salah</p>";
}

switch ($hasil) {
	case '100':
	echo "<center><a href='../../$f/level2/'><input type='submit' value='LANJUT KE LEVEL 2' class='btn btn-info' /></a></center>";
	$_SESSION['level1'] = "lulus";
	echo $_SESSION['$level1'];
	break;

	case '90':
	echo "<center><a href='../../$f/level2/'><input type='submit' value='LANJUT KE LEVEL 2' class='btn btn-info' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;

	case '80':
	echo "<center><a href='../../$f/level2/'><input type='submit' value='LANJUT KE LEVEL 2' class='btn btn-info' /></a></center>";
	$_SESSION['level1'] = "lulus";
	break;
	
	default:
echo "<center><a href='index.php'><input type='submit' value='ULANGI LEVEL 1' class='btn btn-danger' /></a></center>";
		break;
}


?>
</body>
</html>