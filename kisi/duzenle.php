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

  if($_POST){
    $kisi=$_POST;
    $satir=$kisi["adi"].",".$kisi["soyadi"].",".$kisi["yas"].",".$kisi["hobileri"];
    $satir=implode(",",$kisi);
    if (file_put_contents('kisiler.dat',$satir."\n"))
        header('Location:index.php');
    else
    echo"HATA!";
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kişi Düzenle</title>
  </head>
  <body>
    <h3>Kişi Düzenle</h3>
    <hr size="3"/>
    <p>
      <a href="index.php">Geri</a>
    </p>
    <br/>
    <form  action="ekle.php" method="post">
      Adı:
      <input type="text" name="adi" value="<?php echo $kisi['adi'] ?>"/>
      <br/>
      Soyadı:
      <input type="text" name="soyadi" value="<?php echo $kisi['soyadi'] ?>"/>
      <br/>
      Yaş:
        <input type="text" name="yaş" value="<?php echo $kisi['yas'] ?>"/>
      <br/>
      Hobileri:
      <input type="text" name="hobiler" value="<?php echo $kisi['hobileri'] ?>"/>
      <br/>
      <br/>
      <input type="submit"  value="Düzenle"/>
  </body>
</html>
