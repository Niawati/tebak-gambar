<?php
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


switch ($nilai9) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris9.php');		
		break;
}

include "../../pengaturan/atas.html"; 

include "../jawaban.php";

include "../pilihan.php";

pilihan10();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p10") {
	$nilai = 10;
	$_SESSION['nilai10'] = $nilai;
	header('location: gamebelajarbahasainggris-nilailevelsatu.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai10'] = $nilai;
	header('location: gamebelajarbahasainggris-nilailevelsatu.php');

}
}
include "../../pengaturan/footer.html";
?>