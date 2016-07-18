<?php
    $resimler = array('kapadokya-1.jpg','kapadokya-2.jpg','kapadokya-3.jpg','kapadokya-4.jpg');
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Galeri</title>
   </head>
   <body>
     <h1>Galeriye Hoşgeldiniz</h1>
     <h2><a href="../index.php"> Geri dön</a></h2><br>
         <?php for($i=0; $i< count($resimler); $i++){ ?>
           <a href="goster.php?index=<?php echo $i; ?>"><img height="80px" src="<?php echo $resimler[$i]; ?>"  alt="Kapadokya manzaraları"/></a>
         <?php } ?>
       </tr>
      </table>
   </body>
 </html>
