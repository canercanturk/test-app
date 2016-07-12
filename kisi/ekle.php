<?php
  if($_POST){
    $kisi=$_POST;
    $kisi['adi']=str_replace(",","%25%",$kisi["adi"]);
    $kisi['soyadi']=str_replace(",","%25%",$kisi["soyadi"]);
    $kisi['yas']=str_replace(",","%25%",$kisi["yas"]);
    $kisi['hobiler']=str_replace(",","%25%",$kisi["hobiler"]);
    $satir=$kisi["adi"].",".$kisi["soyadi"].",".$kisi["yas"].",".$kisi["hobileri"];
    $satir=implode(",",$kisi);
    if (file_put_contents('kisiler.dat',$satir."\n",FILE_APPEND))
        header('Location:index.php');
    else
    echo"HATA!";
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kişi Ekleme</title>
  </head>
  <body>
    <h3>Kişi Ekle</h3>
    <hr size="3"/>
    <p>
      <a href="index.php">Geri</a>
    </p>
    <br/>
    <form  action="ekle.php" method="post">
      Adı:
      <input type="text" name="adi" value=""/>
      <br/>
      Soyadı:
      <input type="text" name="soyadi" value=""/>
      <br/>
      Yaş:
      <input type="text" name="yas" value=""/>
      <br/>
      Hobileri:
      <input type="text" name="hobiler" value=""/>
      <br/>
      <br/>
      <input type="submit"  value="Kaydet"/>
    </form>
  </body>
</html>
