<?php
session_start();
$nilai1 = $_SESSION['nilai1'];
$nilai2 = $_SESSION['nilai2'];
$nilai3 = $_SESSION['nilai3'];

switch ($nilai3) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: gamebelajarbahasainggris3.php');		
		break;
}

include "../../pengaturan/atas.html"; 

include "../jawaban.php";

include "../pilihan.php";

pilihan4();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p4") {
	$nilai = 10;
	$_SESSION['nilai4'] = $nilai;
	header('location: gamebelajarbahasainggris5.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai4'] = $nilai;
	header('location: gamebelajarbahasainggris5.php');

}
}
include "../../pengaturan/footer.html";
?>