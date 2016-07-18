<?php
  $resim=$_GET['dosya'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Göster</title>
  </head>
  <body>
   <img src="<?php echo $resim; ?>"  alt="Kapadokya manzaraları"/>
   <p align="right">
     <a href="index.php">Geri</a>
   </p>
  </body>
</html>
