<?php
session_start();
$nilai1 = $_SESSION['nilai1'];

switch ($nilai1) {
	case '10':
	case '0':
		break;
	
	default:
	header('location: index.php');		
		break;
}

include "../../pengaturan/atas.html"; 

include "../jawaban.php";

include "../pilihan.php";

pilihan2();

include "../../pengaturan/tengah.php";

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
if ($jawaban == "$p2") {
	$nilai = 10;
	$_SESSION['nilai2'] = $nilai;
	header('location: gamebelajarbahasainggris3.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
} else {
	$nilai = 0;
	$_SESSION['nilai2'] = $nilai;
	header('location: gamebelajarbahasainggris3.php');

}
}
include "../../pengaturan/footer.html";
?>

