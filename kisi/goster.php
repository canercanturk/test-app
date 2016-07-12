<?php
  $kisi = array();
  if (!isset($_GET['index']) || !file_exists('kisiler.dat')) {
    header('Location: index.php');
  } else {
    $index = $_GET['index'];
    $kisilerDat = file_get_contents('kisiler.dat');
    if (trim($kisilerDat)) {
      $kisilerDat = explode("\n", trim($kisilerDat));
      $kisiler = array();
      foreach ($kisilerDat as $kisiLine) {
        $kisiLine = explode(",", $kisiLine);
        $kisi = array(
          "adi" => $kisiLine[0],
          "soyadi" => $kisiLine[1],
          "yas" => $kisiLine[2],
          "hobileri"=>$kisiLine[3]
        );
        $kisiler[] = $kisi;
      }
      $kisi = $kisiler[$index];
    }
    if (!$kisi) {
      header('Location: index.php');
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $kisi['adi']; ?> - Kişi Göster</title>
  </head>
  <body>
    <h3><?php echo 'Adi: ',$kisi["adi"];?><br/>
      <?php echo 'Soyadi: ' ,$kisi["soyadi"];?><br/>
      <?php echo 'Yas: ', $kisi["yas"];?><br/>
      <?php echo 'Hobiler: ' ,$kisi["hobileri"];?><br/>
      <?php //echo "<pre>";
      //print_r($kisi);
      //echo "</pre>"; ?>
    <hr size="1" />
    <p>
      <a href="index.php">Geri</a>
    </p>
    <br />
  </body>
</html>