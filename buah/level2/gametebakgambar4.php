<?php
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];
$nilaidua2 = $_SESSION['nilaidua2'];
$nilaidua3 = $_SESSION['nilaidua3'];

switch ($nilaidua3) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: gametebakgambar3.php');    
    break;
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan4();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua4) {
  $nilai = 10;
  $_SESSION['nilaidua4'] = $nilai;
  header('location: gametebakgambar5.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua4'] = $nilai;
  header('location: gametebakgambar5.php');

}
}
include "../../pengaturan/footerlevel2.html";
?>

