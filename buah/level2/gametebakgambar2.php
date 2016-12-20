<?php
session_start();
$nilaidua1 = $_SESSION['nilaidua1'];

switch ($nilaidua1) {
  case '10':
  case '0':
    break;
  
  default:
  header('location: index.php');    
    break;
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan2();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua2) {
  $nilai = 10;
  $_SESSION['nilaidua2'] = $nilai;
  header('location: gametebakgambar3.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua2'] = $nilai;
  header('location: gametebakgambar3.php');

}
}
include "../../pengaturan/footerlevel2.html";
?>

