<?php
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];
$nilaidua3 = $_SESSION['nilaidua3'];
$nilaidua4 = $_SESSION['nilaidua4'];


switch ($nilaidua4) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: gametebakgambar4.php');    
    break;
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan5();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua5) {
  $nilai = 10;
  $_SESSION['nilaidua5'] = $nilai;
  header('location: gametebakgambar6.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua5'] = $nilai;
  header('location: gametebakgambar6.php');

}
}
include "../../pengaturan/footerlevel2.html";
?>

