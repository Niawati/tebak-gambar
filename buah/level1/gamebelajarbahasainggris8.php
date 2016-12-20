<?php
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];
$nilai4 = $_SESSION['nilai4'];
$nilai5 = $_SESSION['nilai5'];
$nilai6 = $_SESSION['nilai6'];
$nilai7 = $_SESSION['nilai7'];

switch ($nilai7) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris7.php');		
		break;
}

include "../../pengaturan/atas.html"; 

include "../jawaban.php";

include "../pilihan.php";

pilihan8();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p8") {
	$nilai = 10;
	$_SESSION['nilai8'] = $nilai;
	header('location: gamebelajarbahasainggris9.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai8'] = $nilai;
	header('location: gamebelajarbahasainggris9.php');

}
}
include "../../pengaturan/footer.html";
?>