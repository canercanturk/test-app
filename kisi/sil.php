<?php
$index = $_GET['index'];

$kisiler = array();
if(file_exists('kisiler.dat')){
  $kisilerDat=file_get_contents('kisiler.dat');
  if (trim($kisilerDat)) {
    $kisilerDat=explode("\n",trim($kisilerDat));
    foreach ($kisilerDat as $kisiLine) {
      $kisiLine = explode(",",$kisiLine);
      $kisi = array(
        "adi"=>$kisiLine[0],
        "soyadi"=>$kisiLine[1],
        "yas"=>$kisiLine[2],
        "hobileri"=>$kisiLine[3]
      );
      $kisiler[]=$kisi;
    }
  }
}

$veriler = "";

foreach ($kisiler as $key => $kisi) {
  if ($key != $index)
    $veriler .= $kisi['adi'] . "," . $kisi['soyadi'] . "," . $kisi['yas'] . "," . $kisi['hobileri'] . "\n";
}

file_put_contents('kisiler.dat', $veriler);
header("Location: index.php");

 ?>
