<?php
  $resimler = array('kapadokya-1.jpg','kapadokya-2.jpg','kapadokya-3.jpg','kapadokya-4.jpg');
  $index=$_GET['index'];
  $ileri=$index+1;
  $geri=$index-1;
  if ($ileri > 3){
    $ileri=0;
  }
  if ($geri < 0) {
     $geri=3;
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Göster</title>
   </head>
   <body>
    <p align="center">
      <img src="<?php echo 'kapadokya-'.($index+1).'.jpg'; ?>" alt="Galeri"/>
    </p>
    <p align="right">
      <a href="goster.php?index=<?php  echo  $ileri; ?>"/>İLERİ</a>
    </p>
    <p align="left">
      <a href="goster.php?index=<?php  echo $geri;?>">GERİ</a>
    </p>
     </body>
 </html>
