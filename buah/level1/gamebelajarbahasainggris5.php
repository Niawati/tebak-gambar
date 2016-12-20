<?php
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];
$nilai4 = $_SESSION['nilai4'];

switch ($nilai4) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris4.php');		
		break;
}

include "../../pengaturan/atas.html"; 

include "../jawaban.php";

include "../pilihan.php";

pilihan5();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p5") {
	$nilai = 10;
	$_SESSION['nilai5'] = $nilai;
	header('location: gamebelajarbahasainggris6.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai5'] = $nilai;
	header('location: gamebelajarbahasainggris6.php');

}
}
include "../../pengaturan/footer.html";
?>