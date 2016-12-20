<?php
session_start();

if ($_SESSION['level1'] == "lulus") {
//kosong
}else{
  header("location: ../level1/gamebelajarbahasainggris-nilailevelsatu.php");
}

include "../../pengaturan/ataslevel2.html";
include "../pilihan2.php";
include "../jawaban.php";

pilihan1();

if (isset($_POST['proses'])) {
  $convert = $_POST['masuk'] ;

  $masuk = strtoupper($convert);

if ($masuk == $pdua1) {
  $nilai = 10;
  $_SESSION['nilaidua1'] = $nilai;
  header('location: gametebakgambar2.php');
} elseif ($masuk == false) {
   echo "<p class='bg-info'>Anda Belum Memasukan Jawaban</p>";
} else {
  $nilai = 0;
  $_SESSION['nilaidua1'] = $nilai;
  header('location: gametebakgambar2.php');

}
}

include "../../pengaturan/footerlevel2.html";
?>