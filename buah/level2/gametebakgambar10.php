<?php
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


switch ($nilaidua9) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: gametebakgambar9.php');    
    break;
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan10();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua10) {
  $nilai = 10;
  $_SESSION['nilaidua10'] = $nilai;
  header('location: gametebakgambar-nilaileveldua.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua10'] = $nilai;
  header('location: gametebakgambar-nilaileveldua.php');

}
}
include "../../pengaturan/footerlevel2.html";
?>

