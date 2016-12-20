<?php
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];

switch ($nilaidua2) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: gametebakgambar2.php');    
    break;
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan3();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua3) {
  $nilai = 10;
  $_SESSION['nilaidua3'] = $nilai;
  header('location: gametebakgambar4.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua3'] = $nilai;
  header('location: gametebakgambar4.php');

}
}
include "../../pengaturan/footerlevel2.html";
?>

