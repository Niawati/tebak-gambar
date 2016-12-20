<?php 

include "../../pengaturan/atas.html"; ?>

<?php 
include "../jawaban.php";
include "../pilihan.php";

//pilihan gambar dan jawaban
pilihan1();

include '../../pengaturan/tengah.php';

if (isset($_POST['proses'])) {

$jawaban = $_POST['pilihan'];
session_start();
if ($jawaban == "$p1") {
	$nilai = 10;
	$_SESSION['nilai1'] = $nilai;
	header('location: gamebelajarbahasainggris2.php');
} elseif ($jawaban == false) {
	 echo "<p class='bg-danger'>Anda Belum Memasukan Jawaban</p>";
}else{
	$nilai = 0;
	$_SESSION['nilai1'] = $nilai;
	header('location: gamebelajarbahasainggris2.php');

}
}
include '../../pengaturan/footer.html';
?>