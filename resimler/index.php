<?php
    $resimler = array('kapadokya-1.jpg','kapadokya-2.jpg','kapadokya-3.jpg','kapadokya-4.jpg');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>RESİMLER</h1>
    <hr color="blue">
    <h2><a href="../index.html"> Geri dön</a></h2><br>
    <table>
        <?php for($i=0; $i< count($resimler); $i++){ ?>
          <a href="goster.php?dosya=<?php echo $resimler[$i]; ?>"><img height="80px" src="<?php echo $resimler[$i]; ?>" alt="Kapadokya manzaraları"/></a>
        <?php } ?>
      </tr>
     </table>
  </body>
</html>
