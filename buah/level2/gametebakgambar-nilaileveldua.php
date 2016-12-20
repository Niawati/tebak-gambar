<?php
include "../jawaban.php";
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];
$nilaidua3 = $_SESSION['nilaidua3'];
$nilaidua4 = $_SESSION['nilaidua4'];
$nilaidua5 = $_SESSION['nilaidua5'];
$nilaidua6 = $_SESSION['nilaidua6'];
$nilaidua7 = $_SESSION['nilaidua7'];
$nilaidua8 = $_SESSION['nilaidua8'];
$nilaidua9 = $_SESSION['nilaidua9'];
$nilaidua10 = $_SESSION['nilaidua10'];

//jika di nomer 11 langsung tanpa melewati nomer 10 maka akan balik lagi
switch ($nilaidua10) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gametebakgambar10.php');		
		break;
}
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

$hasil = $nilaidua1 + $nilaidua2 + $nilaidua3 + $nilaidua4 + $nilaidua5 + $nilaidua6 + $nilaidua7 + $nilaidua8 + $nilaidua9 + $nilaidua10;

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

if ($nilaidua1 == 10) {
	echo "<p class='text-info'>1. Benar</p>";
}else {
	echo "<p class='text-danger'>1. Salah</p>";
}

if ($nilaidua2 == 10) {
	echo "<p class='text-info'>2. Benar</p>";
}else {
	echo "<p class='text-danger'>2. Salah</p>";
}


if ($nilaidua3 == 10) {
	echo "<p class='text-info'>3. Benar</p>";
}else {
	echo "<p class='text-danger'>3. Salah</p>";
}


if ($nilaidua4 == 10) {
	echo "<p class='text-info'>4. Benar</p>";
}else {
	echo "<p class='text-danger'>4. Salah</p>";
}

if ($nilaidua5 == 10) {
	echo "<p class='text-info'>5. Benar</p>";
}else {
	echo "<p class='text-danger'>5. Salah</p>";
}

if ($nilaidua6 == 10) {
	echo "<p class='text-info'>6. Benar</p>";
}else {
	echo "<p class='text-danger'>6. Salah</p>";
}

if ($nilaidua7 == 10) {
	echo "<p class='text-info'>7. Benar</p>";
}else {
	echo "<p class='text-danger'>7. Salah</p>";
}

if ($nilaidua8 == 10) {
	echo "<p class='text-info'>8. Benar</p>";
}else {
	echo "<p class='text-danger'>8. Salah</p>";
}

if ($nilaidua9 == 10) {
	echo "<p class='text-info'>9. Benar</p>";
}else {
	echo "<p class='text-danger'>9. Salah</p>";
}

if ($nilaidua10 == 10) {
	echo "<p class='text-info'>10. Benar</p>";
}else {
	echo "<p class='text-danger'>10. Salah</p>";
}

switch ($hasil) {
	case '100':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;

	case '90':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;

	case '80':
	echo "<b class='bg-info'>SELAMAT ANDA TELAH MENYELESAIKAN KATEGORI $f2</b> ";
	break;
	
	default:
echo "<center><a href='index.php'><input type='submit' value='ULANGI LEVEL 1' class='btn btn-danger' /></a></center>";
		break;
}


?>
</body>
</html>